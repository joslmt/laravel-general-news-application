<?php

namespace App\Http\Controllers;

use App\Contracts\NewsInterface;
use App\Http\Requests\LatestNewsAPIRequest;
use App\Http\Requests\SearchNewsAPIRequest;
use Illuminate\Contracts\View\View;

class NewsAPIController extends Controller
{
    public function __construct(private NewsInterface $news){}

    public function latestNews(LatestNewsAPIRequest $request): View
    {
        $latestNews = $this->news->latestNews(
            $request->input('country'),
            $request->input('categories'),
        );
        return view('components.latest', compact('latestNews'));
    }

    public function searchNews(SearchNewsAPIRequest $request): View
    {
        $news = $this->news->searchNews(
            $request->input('new'),
            $request->input('sort'),
            $request->input('language')
        );
        return view('components.results', compact('news'));
    }
}
