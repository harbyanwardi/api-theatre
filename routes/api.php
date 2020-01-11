<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace' => 'App\Http\Controllers'], function ($api){
    $api->get('users', 'APIUserController@index');

    $api->get('movies', 'APIMovieController@index');
   
    $api->post('movies/search', 'APIMovieController@getmovies');
    $api->post('movies/seat', 'APIMovieController@getseat');
    $api->get('movies/today', 'APIMovieController@getMoviesToday');

    $api->post('ticket/price', 'APIMovieController@getPriceTicket');
    $api->get('ticket/today', 'APIMovieController@getPriceTicketToday');
   

});