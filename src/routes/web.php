<?php

Route::group(['prefix' => 'places'], function () {
    Route::resource('imports', 'ImportsController');
    Route::get('process-imports', 'ImportsController@processImports');

    Route::get('settings', 'PlacesController@settings');
    Route::post('settings', 'PlacesController@saveSettings');
});
