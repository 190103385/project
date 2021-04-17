<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Project');
});

Route::get('/{lang?}', function($lang='en')
 {
 	App::setlocale($lang);
    return View::make('project');
 });

// Route::get('/project/{lang}', 'App\Http\Controllers\LangController@index');

// Route::get('/project', 'App\Http\Controllers\UploadFileController@uploadForm');

Route::post('/project', 'App\Http\Controllers\UploadFileController@uploadSubmit');

Route::get('/mail/send', 'App\Http\Controllers\MailController@send');
