<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Category as SubCategory;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share categories with the header view
        View::composer('front.layouts.inc.header', function ($view) {
            $categories = Category::all(); // Fetch all categories
            $view->with('categories', $categories);
            $subcategories = SubCategory::all();
            $view->with('subcategories', $subcategories);
        });
    }
}
