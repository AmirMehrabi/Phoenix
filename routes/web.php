<?php


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
    return view('landing');
});

Route::get('/test', function () {
    return view('test');
});


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('projects', 'ProjectsController');


    // Route::get('/dashboard', 'ProjectsController@darkIndex');
    Route::get('/dashboard/{date?}', 'ProjectsController@darkIndex');
    Route::get('/{date?}', 'ProjectsController@darkIndex');

    Route::post('projects/{project}/tasks', 'ProjectTasksController@store');
    Route::patch('projects/{project}/tasks/{task}', 'ProjectTasksController@update');

    Route::post('projects/{project}/invitations', 'ProjectInvitationsController@store');

    Route::get('/home', 'HomeController@index')->name('home');
});
