<?php

Route::get('/', function () {
    return view('home');
});

Route::prefix('quotes')->group(function () {
    //Route::get('/', 'QuoteController@getQuotes');
    //Route::post('/set', 'QuoteController@setQuotes');
    Route::get('/quotd', 'QuoteController@quotd');
    Route::get('/random', 'QuoteController@random');
    Route::get('/search', 'QuoteController@search');
});
