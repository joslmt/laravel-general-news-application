<?php

namespace App\Providers;

use App\Contracts\NewsInterface;
use App\Http\Controllers\NewsAPIController;
use App\Models\NewsAPI;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * 
     * Using Contextual binding for future implementations.
     * 
     * @return void
     * 
     * @see https://laravel.com/docs/8.x/container#contextual-binding
     */
    public function register()
    {
        $this->app->when(NewsAPIController::class)
            ->needs(NewsInterface::class)
            ->give(NewsAPI::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
