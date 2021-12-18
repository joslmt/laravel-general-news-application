<?php

namespace App\Models;

use App\Contracts\NewsInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class NewsAPI implements NewsInterface
{
    public function __construct(private Client $client){}
   
    public function latestNews(string $country, string $category): array
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
