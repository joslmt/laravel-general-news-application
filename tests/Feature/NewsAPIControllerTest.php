<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsAPIControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function home_can_be_rendered()
    {
        $this->get(route('home'))
            ->assertSuccessful()
            ->assertSee('Walter Winchell');
    }

    /**
     * @test 
     */
    public function guess_can_search_news()
    {
        $this->get(
            route(
                'search',
                [
                    'new' => 'black cats',
                    'sort' => 'popularity',
                    'language' => 'en',
                ]
            ),
            [
                'X-Api-Key' => config('app.news_api')
            ]
        )->assertSuccessful()
            ->assertSee('Total news 100');
    }

    /**
     * @test 
     */
    public function guess_can_search_breaking_news()
    {
        $this->get(
            route(
                'latest',
                [
                    'country' => 'en',
                    'categories' => 'health',
                ]
            ),
            [
                'X-Api-Key' => config('app.news_api')
            ]
        )->assertSuccessful()
            ->assertSee('Breaking News');
    }

    /**
     * @test 
     */
    public function search_news_redirect_to_home_if_not_all_options_are_selected()
    {
        /**
         * We also need a new to search.
         */
        $this->get(
            route(
                'search',
                [
                    'sort' => 'popularity',
                    'language' => 'en',
                ]
            ),
            [
                'X-Api-Key' => config('app.news_api')
            ]
        )->assertRedirect(route('home'));
    }

    /**
     * @test 
     */
    public function breaking_news_search_redirect_to_home_if_not_all_options_are_selected()
    {
        /**
         * We also need a country where to search.
         */
        $this->get(
            route(
                'latest',
                [
                    'categories' => 'health',
                ]
            ),
            [
                'X-Api-Key' => config('app.news_api')
            ]
        )->assertRedirect(route('home'));
    }
}
