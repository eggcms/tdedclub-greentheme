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
//Route::get('/', 'HomeController@index');



Route::get('/', 'HomeController@index');
Route::get('/news', 'HomeController@news');
Route::get('/news/{blogId}', 'HomeController@newsItem');

Route::get('/analyzes', 'HomeController@analyzes');
Route::get('/analyze/{blogId}', 'HomeController@analyzeItem');

Route::get('/balltable', 'HomeController@balltable');
Route::get('/tdedmaster', 'HomeController@tdz');
Route::get('/tds', 'HomeController@tds');

Route::get('/hls', 'HomeController@hls');

Route::post('/line-notify', 'HomeController@lineNotify');
// Route::get('/news', function() { 
//     return view('home.news'); 
// });



// Route::get('/', function() { 
//     return view('home.index'); 
// });

Route::get('/live', function() { 
    return view('home.live'); 
});

// Route::get('/tdedmaster', function() { 
//     return view('home.tdedmaster'); 
// });

Route::get('/tdedstep', function() { 
    return view('home.tdedstep'); 
});

Route::get('/analysis', function() { 
    return view('home.analysis'); 
});

Route::get('/scoreball', function() { 
    return view('home.scoreball'); 
});



Route::get('/highlight', function() {
    return view('home.highlight');
});