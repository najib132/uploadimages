<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'FormController@index');
Route::post('upload_data', 'FormController@store');

 Route::get('image', 'ImageController@index');
 Route::post('save-image', 'ImageController@save');  
