<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        // if ($request->header('X-Forwarded-Proto') === 'https') {
        //     URL::forceScheme('https');
        // } else {
        //     URL::forceScheme('http');
        // }

        Paginator::useBootstrapFive();
    }
}
