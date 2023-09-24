<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\MenuRepositoryInterface;
use App\Repositories\MenuRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            MenuRepositoryInterface::class, 
            MenuRepositoryEloquent::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('partials.language_switcher', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
