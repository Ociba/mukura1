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

Route::get('/', function () { return view('welcome');});
Route::get('/about', function () { return view('pages.about');})->name('About Us');
Route::get('/team', function () { return view('pages.team');})->name('Our Team');
Route::get('/activities', function () { return view('pages.activities');})->name('Activities');
Route::get('/events', function () { return view('pages.events');})->name('Events');
Route::get('/blog', function () { return view('pages.blog');})->name('Blog');
Route::get('/contact', function () { return view('pages.contact');})->name('Contact');
