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
    public function getLatestNews(string $country, string $category): array
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
    public function searchNews(string $query, string $sort, string $language): array
    {
        return json_decode(
            $this->client->get(
                "everything?q={$query}&sortBy={$sort}&language={$language}"
            )->getBody(),
            true
        );
    }
}
