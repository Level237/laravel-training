<?php

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

Route::get('/','App\Http\Controllers\ArticleControllers@index')->name('welcome');
Route::get('/post/{id}','App\Http\Controllers\ArticleControllers@show')->whereNumber('id')->name('posts.show');
Route::get('/contact','App\Http\Controllers\ArticleControllers@contact')->name('contact');
Route::get('/create','App\Http\Controllers\ArticleControllers@create')->name('post.create');
// Route::get('post',function(){
//     return response()->json([
//         'title'=> 'mon titre',
//         'description'=>'ma description'
//     ]);
// });

// Route::get('articles',function(){
//     return view('articles');
// });
