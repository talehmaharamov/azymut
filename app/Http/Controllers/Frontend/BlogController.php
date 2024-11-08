<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $mainBlogs = Blog::where('status', 1)->paginate(15);
        return view('frontend.blog.index', get_defined_vars());
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $relatedBlogs = Blog::where('id', '=', $blog->id)->where('id', '<>', $blog->id)->get();

        if (empty($blog)) {
            return abort(404);
        }
        $nextProject = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        $previousProject = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        return view('frontend.blog.show', get_defined_vars());
    }
}
