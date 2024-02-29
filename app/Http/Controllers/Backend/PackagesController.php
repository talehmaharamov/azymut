<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CRUDHelper;
use App\Models\PackagesTranslation;
use Exception;
use Illuminate\Http\Request;
use App\Models\Packages;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index()
    {
        check_permission('packages index');
        $packages = Packages::all();
        return view('backend.packages.index', get_defined_vars());
    }

    public function create()
    {
        check_permission('packages create');
        return view('backend.packages.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        check_permission('packages create');
        try {
            $package = new Packages();
            $package->amount = $request->amount;
            $package->save();
            foreach (active_langs() as $lang) {
                $translation = new PackagesTranslation();
                $translation->locale = $lang->code;
                $translation->packages_id = $package->id;
                $translation->name = $request->name[$lang->code];
                $translation->description = $request->description[$lang->code];
                $translation->save();
            }
            alert()->success(__('messages.success'));
            return redirect(route('backend.packages.index'));
        } catch (Exception $e) {
            alert()->error(__('backend.error'));
            return redirect(route('backend.packages.index'));
        }
    }

    public function edit(string $id)
    {
        check_permission('packages edit');
        $package = Packages::find($id);
        return view('backend.packages.edit', get_defined_vars());
    }

    public function update(Request $request, string $id)
    {
        check_permission('packages edit');
        try {
            $package = Packages::find($id);
            DB::transaction(function () use ($request, $package) {
                $package->amount = $request->amount;
                foreach (active_langs() as $lang) {
                   $package->translate($lang->code)->name = $request->name[$lang->code];
                   $package->translate($lang->code)->description = $request->description[$lang->code];
                }
                $package->save();
            });
            alert()->success(__('messages.success'));
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error(__($e->getMessage()));
            return redirect()->back();
        }
    }

    public function status(string $id)
    {
        check_permission('packages edit');
        return CRUDHelper::status('\App\Models\Packages', $id);
    }

    public function delete(string $id)
    {
        check_permission('packages delete');
        return CRUDHelper::remove_item('\App\Models\Packages', $id);
    }
}
