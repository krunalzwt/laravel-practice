<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// It is for React (after starting npm run dev)
Route::get('/', function () {
    $aboutPageUrl = route('about');
    dd($aboutPageUrl);
    return view('app');
});

// It is for Blade(Laravel Native/Default)
Route::view('/about-us','about')->name('about');