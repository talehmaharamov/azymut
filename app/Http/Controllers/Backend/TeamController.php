<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CRUDHelper;
use App\Models\TeamPhotos;
use App\Models\TeamTranslation;
use Exception;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        check_permission('team index');
        $teams = Team::all();
        return view('backend.team.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('team create');
        return view('backend.team.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        check_permission('team create');
        try {
            $team = new Team();
            $team->photo = upload('team', $request->file('photo'));
            $team->email = $request->email;
            $team->phone = $request->phone;
            $team->alt = $request->alt;
            $team->facebook = $request->facebook;
            $team->instagram = $request->instagram;

            $team->save();
            foreach (active_langs() as $lang) {
                $translation = new TeamTranslation();
                $translation->locale = $lang->code;
                $translation->team_id = $team->id;
                $translation->name = $request->name[$lang->code];
                $translation->position = $request->position[$lang->code];
                $translation->save();
            }

            alert()->success(__('messages.success'));
            return redirect(route('backend.team.index'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect(route('backend.team.index'));
        }
    }

    public function edit(string $id)
    {
        check_permission('team edit');
        $team = Team::where('id', $id)->with('photos')->first();
        return view('backend.team.edit', get_defined_vars());
    }

    public function update(Request $request, string $id)
    {
        check_permission('team edit');
        try {
            $team = Team::where('id', $id)->with('photos')->first();
            DB::transaction(function () use ($request, $team) {
                if ($request->hasFile('photo')) {
                    if (file_exists($team->photo)) {
                        unlink(public_path($team->photo));
                    }
                    $team->photo = upload('team', $request->file('photo'));
                }
                if ($request->hasFile('photos')) {
                    foreach (multi_upload('team', $request->file('photos')) as $photo) {
                        $teamPhoto = new TeamPhotos();
                        $teamPhoto->photo = $photo;
                        $team->photos()->save($teamPhoto);
                    }
                }
                foreach (active_langs() as $lang) {
                    $team->translate($lang->code)->name = $request->name[$lang->code];
                    $team->translate($lang->code)->description = $request->description[$lang->code];
                }
                $team->save();
            });
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error(__('backend.error'));
            return redirect()->back();
        }
    }

    public function status(string $id)
    {
        check_permission('team edit');
        return CRUDHelper::status('\App\Models\Team', $id);
    }

    public function delete(string $id)
    {
        check_permission('team delete');
        return CRUDHelper::remove_item('\App\Models\Team', $id);
    }
}
