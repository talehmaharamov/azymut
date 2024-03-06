<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->get();
        return view('frontend.services.index', get_defined_vars());
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if (empty($service)) {
            return abort(404);
        }
        $nextProject = Service::where('id', '>', $service->id)->orderBy('id', 'asc')->first();
        $previousProject = Service::where('id', '<', $service->id)->orderBy('id', 'desc')->first();
        return view('frontend.services.show', get_defined_vars());
    }
}
