<?php

namespace App\Providers;

use App\Models\News;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class NewsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // di App\Providers\NewsServiceProvider.php
        View::composer('pages.frontend.index', function ($view) {
            $latestNews = News::with('category_news')->latest()->take(3)->get();
            $view->with('latestNews', $latestNews);
        });
    }
}
