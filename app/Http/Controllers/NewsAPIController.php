<?php

namespace App\Http\Controllers;

use App\Contracts\NewsInterface;
use App\Http\Requests\LatestNewsAPIRequest;
use App\Http\Requests\SearchNewsAPIRequest;
use Illuminate\Contracts\View\View;

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
     * 
     * @return View
     *  
     * @see https://newsapi.org/docs/endpoints/top-headlines
     */
    public function latestNews(LatestNewsAPIRequest $request): View
    {
        $latestNews = $this->news->getLatestNews(
            $request->input('country'),
            $request->input('categories'),
            $request->input('sort')
        );
        return view('components.latest', compact('latestNews'));
    }

    /**
     * Search news.
     *
     * @param SearchNewsAPIRequest $request
     * 
     * @return View
     *  
     * @see https://newsapi.org/docs/endpoints/everything
     */
    public function searchNews(SearchNewsAPIRequest $request): View
    {
        $searchNews = $this->news->searchNews(
            $request->input('new'),
            $request->input('sort'),
            $request->input('language')
        );
        return view('components.results', compact('searchNews'));
    }
}
