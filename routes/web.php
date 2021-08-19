<?php

use App\Http\Controllers\NewsAPIController;
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

Route::get('/search', [NewsAPIController::class, 'searchNews'])->name('search');

Route::get('/latest', [NewsAPIController::class, 'latestNews'])->name('latest');
