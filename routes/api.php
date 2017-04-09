<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::group(['prefix' => '/books'], function () {
        /***
         * @apiGroup Books
         * @api {get} books List All Books
         *
         * @apiHeader {Bearer} Authorization Authorize user
         */
        Route::get('/', 'BookController@index');
        Route::get('{book}', 'BookController@view');
        Route::post('/', 'BookController@create');
        Route::put('{book}', 'BookController@update');
        Route::delete('{book}', 'BookController@delete');
    });
});