<?php

namespace App\Models;

use App\Contracts\NewsInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

/**
 * This class handles all logic about request to NewsAPI, it uses Guzzle to do 
 * it.
 * 
 * @author Jose <joseluis95123@gmail.com> 
 */
class NewsAPI implements NewsInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://newsapi.org/v2/',
            'headers' => [
                'X-Api-Key' => config('app.news_api')
            ]
        ]);
    }

    /**
     * @inherit
     * 
     * Use Cache
     * 
     * @see https://laravel.com/docs/8.x/cache#cache-usage 
     */
    public function getLatestNews(string $country, string $category): array
    {
        if (Cache::has("latestNews{$category}-{$country}")) {
            return Cache::get("latestNews{$category}-{$country}");
        }

        $latestNews = json_decode(
            $this->client->get(
                "top-headlines?country={$country}&category={$category}&pageSize=100"
            )->getBody(),
            true
        );

        Cache::put("latestNews{$category}-{$country}", $latestNews);

        return $latestNews;
    }

    /**
     * @inherit
     */
    public function searchNews(string $query, string $sort, string $language): array
    {
        if (Cache::has("searchNews{$query}-{$language}")) {
            return Cache::get("searchNews{$query}-{$language}");
        }

        $news = json_decode(
            $this->client->get(
                "everything?q={$query}&sortBy={$sort}&language={$language}&pageSize=100"
            )->getBody(),
            true
        );

        Cache::put("searchNews{$query}-{$language}", $news);

        return $news;
    }
}
