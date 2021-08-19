<?php

namespace App\Http\Controllers;

use App\Contracts\NewsInterface;
use App\Http\Requests\LatestNewsAPIRequest;
use App\Http\Requests\SearchNewsAPIRequest;

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
     * @param LatestNewsAPIRequest $request
     * @return array
     * 
     * @see https://newsapi.org/docs/endpoints/top-headlines
     */
    public function latestNews(LatestNewsAPIRequest $request): array
    {
        $country = $request->input('country');
        $category = $request->input('categories');
        $sort = $request->input('sort');
        return $this->news->getLatestNews($country, $category, $sort);
    }

    /**
     * Search news.
     *
     * @param SearchNewsAPIRequest $request
     * @return array
     * 
     * @see https://newsapi.org/docs/endpoints/everything
     */
    public function searchNews(SearchNewsAPIRequest $request): array
    {
        $query = $request->input('new');
        $sort = $request->input('sort');
        $language = $request->input('language');
        return $this->news->searchNews($query, $sort, $language);
    }
}
