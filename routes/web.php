<?php

use Illuminate\Support\Facades\Route;

Route::get('/', Function() {
    return view('Pages.home');
});

Route::get('/item', Function() {
    return view('Pages.item');
});

Route:: get('/picture', Function() {
    return view('Pages.picture');
});
