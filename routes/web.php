<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/articles', function () { return view('articles'); });
Route::get('/news', function () { return view('news'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::get('/wildlife', function () { return view('wildlife'); });
Route::get('/donate', function () { return view('donate'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/resources', function () { return view('resources'); });
