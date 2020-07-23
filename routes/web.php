<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/get-quotes', 'QuoteController@getQuotes');
Route::get('/set-quotes', 'QuoteController@setQuotes');