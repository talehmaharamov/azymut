<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug): View
    {
        $category = Category::where('slug', $slug)->with('subcategories.content')->first();

        if (!$category) {
            return abort(404);
        }

        $projects = [];
        $subcategories = $category->subcategories;

        foreach ($subcategories as $subcategory) {
            foreach ($subcategory->content as $content) {
                $projects[] = $content;
            }
        }

        $contents = $category->content()->paginate(9);
        return view('frontend.content.index', compact('contents', 'category','projects'));
    }
}
