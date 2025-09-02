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
        // Handle Laravel Expose HTTPS forwarding
        if ($request->header('X-Forwarded-Proto') === 'https' ||
            $request->header('X-Forwarded-For') ||
            str_contains($request->header('Host', ''), 'sharedwithexpose.com')) {
            URL::forceScheme('https');
        }

        Paginator::useBootstrapFive();
    }
}
