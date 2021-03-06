<?php

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

Route::get('/', "HomeController@index");
Route::get('/home/index', "HomeController@index");
Route::get('/member/login', "MemberController@login");
Route::post('/member/login', "MemberController@postLogin");
Route::get('/member/secret', "MemberController@secret");