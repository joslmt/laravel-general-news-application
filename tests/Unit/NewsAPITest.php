<?php

namespace Tests\Unit;

use App\Models\NewsAPI;
use Tests\TestCase;

class NewsAPITest extends TestCase
{
    private function client(): NewsAPI
    {
        return $this->app->make(NewsAPI::class);
    }

    /**
     * @test
     */
    public function getLatestNews_return_an_array()
    {
        $request = $this->client()->latestNews('ar', 'health');
        $this->assertIsArray($request);
        $this->assertArrayHasKey('title', $request['articles'][0]);
    }

    /**
     * @test 
     */
    public function searchNews_return_an_array()
    {
        $request = $this->client()->searchNews('b', 'popularity', 'en');
        $this->assertIsArray($request);
        $this->assertArrayHasKey('title', $request['articles'][0]);
    }
}
