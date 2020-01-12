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
   
    $api->post('searchmovie', 'APIMovieController@getmovies');
    $api->post('seat', 'APIMovieController@getseat');
    $api->get('moviestoday', 'APIMovieController@getMoviesToday');

    $api->post('ticketprice', 'APIMovieController@getPriceTicket');
    $api->get('tickettoday', 'APIMovieController@getPriceTicketToday');
   

});