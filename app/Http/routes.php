<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('basic1', function(){
    return 'hello world';
});

Route::get('request', 'User\UserController@name');

Route::get('/user/form', 'User\UserController@form');

Route::get('/db', 'User\UserController@db');

// Route::get('api/events/add', 'EventsList\EventsListController@events_add');

Route::any('api/user', function () {
    $user = new App\User;
    return $user->signup();
});

Route::any('api/events/add', function () {
    $events = new App\Events;
    return $events->events_add();
});

Route::any('api/events/batch_addition', function () {
    $events = new App\Events;
    return $events->events_batch_addition();
});

Route::any('api/events/list', function () {
    $events = new App\Events;
    return $events->events_list();
});

Route::any('api/events/list/reverse', function () {
    $events = new App\Events;
    return $events->events_list_reverse();
});

Route::any('api/events/search', function () {
    $events = new App\Events;
    return $events->events_search();
});

Route::any('api/events/delete', function () {
    $events = new App\Events;
    return $events->events_delete();
});

Route::any('api/events/update', function () {
    $events = new App\Events;
    return $events->events_update();
});