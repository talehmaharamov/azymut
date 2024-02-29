<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CRUDHelper;
use App\Models\Category;
use App\Models\StylePhotos;
use App\Models\StyleTranslation;
use Exception;
use Illuminate\Http\Request;
use App\Models\Style;
use Illuminate\Support\Facades\DB;

class StyleController extends Controller
{
    public function index()
    {
        check_permission('style index');
        $styles = Style::with('photos')->get();
        return view('backend.style.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('style create');
        $styles = Style::all();
        return view('backend.style.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        check_permission('style create');
        try {
            $style = new Style();
            $style->photo = upload('style', $request->file('photo'));
            $style->slug = $request->slug;
            $style->is_home = ($request->is_home) ? 1 : 0;
            $style->save();
            foreach (active_langs() as $lang) {
                $translation = new StyleTranslation();
                $translation->locale = $lang->code;
                $translation->style_id = $style->id;
                $translation->name = $request->name[$lang->code];
                $translation->description = $request->description[$lang->code] ?? null;
                $translation->alt = $request->alt[$lang->code] ?? null;
                $translation->save();
            }
            foreach (multi_upload('style', $request->file('photos')) as $photo) {
                $stylePhoto = new StylePhotos();
                $stylePhoto->photo = $photo;
                $style->photos()->save($stylePhoto);
            };
            alert()->success(__('messages.success'));
            return redirect(route('backend.style.index'));
        } catch (Exception $e) {
            alert()->error(__('backend.error'));
            return redirect(route('backend.style.index'));
        }
    }

    public function edit(string $id)
    {
        check_permission('style edit');
        $style = Style::where('id', $id)->with('photos')->first();
        $styles = Style::all();
        return view('backend.style.edit', get_defined_vars());
    }

    public function update(Request $request, string $id)
    {
        check_permission('style edit');
        try {
            $style = Style::where('id', $id)->with('photos')->first();
            DB::transaction(function () use ($request, $style) {
                if ($request->hasFile('photo')) {
                    if (file_exists($style->photo)) {
                        unlink(public_path($style->photo));
                    }
                    $style->photo = upload('style', $request->file('photo'));
                }
                if ($request->hasFile('photos')) {
                    foreach (multi_upload('style', $request->file('photos')) as $photo) {
                        $stylePhoto = new StylePhotos();
                        $stylePhoto->photo = $photo;
                        $style->photos()->save($stylePhoto);
                    }
                }
                foreach (active_langs() as $lang) {
                    $style->translate($lang->code)->name = $request->name[$lang->code];
                    $style->translate($lang->code)->description = $request->description[$lang->code] ?? null;
                    $style->translate($lang->code)->alt = $request->alt[$lang->code] ?? null;
                }
                $style->is_home = ($request->is_home) ? 1 : 0;
                $style->save();
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
        check_permission('style edit');
        return CRUDHelper::status('\App\Models\Style', $id);
    }

    public function delete(string $id)
    {
        check_permission('style delete');
        return CRUDHelper::remove_item('\App\Models\Style', $id);
    }

    public function deletePhoto($id)
    {
        check_permission('style delete');
        return CRUDHelper::remove_item('\App\Models\StylePhotos', $id);
    }
}
