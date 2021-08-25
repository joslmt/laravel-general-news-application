<?php

namespace Tests\Unit;

use App\Models\NewsAPI;
use Tests\TestCase;

class NewsAPITest extends TestCase
{

    /**
     * Get a NewsAPI object to test request.
     *
     * @return NewsAPI
     */
    private function getNewsAPI(): NewsAPI
    {
        return $this->app->make(NewsAPI::class);
    }

    /**
     * @test
     */
    public function getLatestNews_return_an_array()
    {
        $request = $this->getNewsAPI()->getLatestNews('ar', 'health');
        $this->assertIsArray($request);
        $this->assertArrayHasKey('title', $request['articles'][0]);
    }

    /**
     * @test 
     */
    public function searchNews_return_an_array()
    {
        $request = $this->getNewsAPI()->searchNews('b', 'popularity', 'en');
        $this->assertIsArray($request);
        $this->assertArrayHasKey('title', $request['articles'][0]);
    }
}
