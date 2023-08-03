<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('careers', function () {
    return view('careers');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('history', function () {
    return view('history');
});

Route::get('nwes', function () {
    return view('news');
});

Route::get('people', function () {
    return view('people');
});

Route::get('service_details_1', function () {
    return view('service_details_1');
});

Route::get('service_details_2', function () {
    return view('service_details_2');
});

Route::get('service_details_3', function () {
    return view('service_details_3');
});

Route::get('service_details_4', function () {
    return view('service_details_4');
});

Route::get('service_details_5', function () {
    return view('service_details_5');
});

Route::get('service_details_6', function () {
    return view('service_details_6');
});

Route::get('service', function () {
    return view('service');
});

Route::get('testimonial', function () {
    return view('testimonial');
});