<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__ . '/auth.php';

Route::view('/results', 'components.results')->name('results');

// Route::view('/read', 'components.readmore')->name('readmore');

Route::get('/search', function (Request $request) {
    $request->search == 'latest' ?
        ddd('Latest about ' . $request->new)
        :
        ddd('Search ' . $request->new);
})->name('search');
