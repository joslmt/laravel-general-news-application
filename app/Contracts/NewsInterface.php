<?php

namespace App\Contracts;

interface NewsInterface
{
    public function latestNews(string $country, string $category): array;
    public function searchNews(string $query, string $sort, string $language): array;
}
