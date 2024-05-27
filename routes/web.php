<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    $comics = config('comics');
    $links_top = config('footer_links_top');
    $links_middle = config('footer_links_middle');
    return view('home', compact('comics','links_top','links_middle'));
})->name('home');
Route::resource('comics', ComicController::class);


