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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about','helloController@Manush');
Route::get('/blog','helloController@blog');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('write/post','boloConttroler@writePost')->name('write.post');

//crud category are here
Route::get('add/category','boloConttroler@addCategory')->name('add.category');
Route::post('store/category','boloConttroler@storeCategory')->name('store.category');
Route::get('all/category','boloConttroler@allCategory')->name('all.category');
Route::get('delete/category/{id}','boloConttroler@deleteCategory');
Route::get('edit/category/{id}','boloConttroler@editCategory');
Route::post('update/category/{id}','boloConttroler@updateCategory');

//post crud
Route::post('store/post','boloConttroler@storePost')->name('store.post');
