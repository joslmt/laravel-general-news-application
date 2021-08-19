<?php

namespace App\Http\Controllers;

use App\Contracts\NewsInterface;

class NewsAPIController extends Controller
{
    /**
     * NewsInterface object.
     *
     * @var NewsInterface
     */
    private $news;

    /**
     * Dependency injection.
     *
     * @param NewsInterface $news
     */
    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    /**
     * Return the latest news using NewsAPI.
     * 
     * @return array
     * 
     * @see https://newsapi.org/docs/endpoints/top-headlines
     */
    public function latestNews(): array
    {
        return $this->news->getLatestNews('fr', 'business');
    }

    /**
     * Search news.
     *
     * @return array
     * 
     * @see https://newsapi.org/docs/endpoints/everything
     */
    public function searchNews(): array
    {
        return $this->news->searchNews('bitcoin');
    }
}
