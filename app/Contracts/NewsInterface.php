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
     * @return array
     */
    public function getLatestNews(): array;

    /**
     * Search through millions of articles and return an array of information.
     *
     * @return array
     */
    public function searchNews(): array;
}
