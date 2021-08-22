<?php

use App\Http\Controllers\NewsAPIController;
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

/**
 * At the moment the app doesnt use registration.
 */
// require __DIR__ . '/auth.php';

Route::get('/search', [NewsAPIController::class, 'searchNews'])->name('search');
Route::get('/latest', [NewsAPIController::class, 'latestNews'])->name('latest');
