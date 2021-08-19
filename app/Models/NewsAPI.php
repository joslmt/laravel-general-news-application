<?php

namespace App\Models;

use App\Contracts\NewsInterface;
use GuzzleHttp\Client;

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
     */
    public function getLatestNews(string $country = 'us', string $category = 'business'): array
    {
        return json_decode(
            $this->client->get(
                "top-headlines?country={$country}&category={$category}"
            )->getBody(),
            true
        );
    }

    /**
     * @inherit
     */
    public function searchNews(string $query = 'bitcoin'): array
    {
        return json_decode(
            $this->client->get("everything?q={$query}")->getBody(),
            true
        );
    }
}
