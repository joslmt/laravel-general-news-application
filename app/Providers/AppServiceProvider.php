<?php

namespace App\Providers;

use App\Contracts\NewsInterface;
use App\Models\NewsAPI;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(abstract: NewsInterface::class, concrete: NewsAPI::class);
        $this->app->bind(Client::class, fn() => new Client([
                    'base_uri' => 'https://newsapi.org/v2/',
                    'headers' => [
                        'X-Api-Key' => config('app.news_api')
                    ]
                ])  
        );
    }
    
    public function boot()
    {
       // 
    }
}