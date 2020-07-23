<?php

Route::get('/', function () {
    return view('home');
});

Route::prefix('quotes')->group(function () {
    Route::get('/', 'QuoteController@getQuotes');
    Route::get('/set', 'QuoteController@setQuotes');
    Route::get('/quotd', 'QuoteController@quotd');
});
