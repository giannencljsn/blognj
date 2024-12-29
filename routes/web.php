<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Livewire\Gallery;



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

// Route::get('/', function () {
//     return view('front.pages.example');
// });

Route::view('/', 'front.pages.home')->name('home');




Route::get('/article/{any}', [BlogController::class, 'readPost'])->name('read_post');
Route::get('/category/{any}', [BlogController::class, 'categoryPosts'])->name('category_posts');
Route::get('/posts/tag/{any}', [BlogController::class, 'tagPosts'])->name('tag_posts');
Route::get('/search', [BlogController::class, 'searchBlog'])->name('search_posts');




Route::get('phpmyinfo', function () {
    phpinfo();
})->name('phpmyinfo');


// Route::get('xdebug_info', function () {
//     xdebug_info();
// })->name('xdebug_info');
