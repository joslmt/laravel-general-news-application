<?php

namespace App\Contracts;

/**
 * Describes what is need to request data to an API about news.
 * 
 * @author Jose <joseluis95123@gmail.com>
 */
interface NewsInterface
{
    /**
     * Get latest news, returning an array of news.
     *
     * @param string $country Where to search.
     * @param string $category What kind of news to learn.
     * 
     * @return array News.
     * 
     * Category list and available countries :
     * @see https://newsapi.org/docs/endpoints/top-headlines
     */
    public function getLatestNews(string $country, string $category): array;

    /**
     * Search through millions of articles and return an array of information.
     *
     * @param string $query New to search.
     * 
     * @return array
     * 
     * @see https://newsapi.org/docs/endpoints/everything
     */
    public function searchNews(string $query): array;
}
