<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Meta;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(): void
    {
        $generalCategories = Category::with('subcategories.subcategories')->get();
        $mainCategories = Category::where('parent_id', null)->with('subcategories.subcategories')->get();
        $generalServices = Content::where('status',1)->orderBy('created_at','desc')->paginate(5);
        $faqs = Faq::where('status', 1)->get();
        $faqSchemas = Faq::where('status', 1)->with('translation')->get()->pluck('translation.schema')->toArray();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        $metas = Meta::whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('metas')
                ->where('status', 1)
                ->groupBy('page');
        })->get()->groupBy('page');
        view()->share([
            'generalCategories' => $generalCategories,
            'mainCategories' => $mainCategories,
            'generalServices' => $generalServices,
            'faqs' => $faqs,
            'faqSchemas' => $faqSchemas,
            'sliders' => $sliders,
            'metas' => $metas,
        ]);
    }
}
