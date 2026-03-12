<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\AdminController;

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
Route::get('/map', function () { return view('worldmap'); });
Route::get('/shop', function () { return view('shop'); });
Route::get('/team', function () { return view('team'); });
Route::get('/join', function () { return view('join'); });
Route::get('/journal', [JournalController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'loginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::post('/admin/quotes', [AdminController::class, 'storeQuote']);
Route::delete('/admin/quotes/{id}', [AdminController::class, 'deleteQuote']);
Route::patch('/admin/quotes/{id}', [AdminController::class, 'toggleQuote']);
Route::post('/admin/vocab', [AdminController::class, 'storeVocab']);
Route::delete('/admin/vocab/{id}', [AdminController::class, 'deleteVocab']);
Route::patch('/admin/vocab/{id}', [AdminController::class, 'toggleVocab']);
Route::post('/admin/quotes/{id}/update', [AdminController::class, 'updateQuote']);
Route::post('/admin/vocab/{id}/update', [AdminController::class, 'updateVocab']);