<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Pricing
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Features
Route::get('/features', function () {
    return view('features');
})->name('features');

