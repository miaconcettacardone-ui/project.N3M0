<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/explore', function () { return view('explore'); });
Route::get('/articles', function () { return view('articles'); });
Route::get('/news', function () { return view('news'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::get('/wildlife', function () { return view('wildlife'); });
Route::get('/take-action', function () { return view('takeaction'); });
Route::get('/donate', function () { return view('donate'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/resources', function () { return view('resources'); });
Route::get('/discovery', function () { return view('discovery'); });
Route::get('/transparency', function () { return view('transparency'); });
Route::get('/volunteer', function () { return view('volunteer'); });
