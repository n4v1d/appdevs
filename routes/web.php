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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| contain routes that use in admin application & only account with type=10 has access to them.
|
 */
Route::group(array('prefix' => 'admin','middleware' => ['auth']), function () {

    Route::get('/', 'AdminController@index');


    ///////////// Course Section //////////////////////

                ///   Course List ///
        Route::get('/course', 'CourseController@index'); // -> Course List (Index)

        Route::get('/course/new', 'CourseController@create'); // ->  Create New Course Form
        Route::post('/course/new', 'CourseController@store'); // ->  Store  Course Data Into Database

        Route::get('/course/edit/{course}', 'CourseController@edit'); // ->  Edit Course Form
        Route::post('/course/edit/{course}', 'CourseController@update'); // ->  Update  Course Data Into Database


        Route::get('/course/delete/{course}', 'CourseController@destroy'); // ->  Delete Course

        Route::get('/course/episode/{course}', 'CourseController@episods'); // ->  Delete Course

                ///   Episode List ///

        Route::get('/course/{course}/newEpisode', 'EpisodeController@create'); // ->  Create New Course Form
        Route::post('/course/{course}/newEpisode', 'EpisodeController@store'); // ->  Store  Course Data Into Database

        Route::get('/course/episode/{course}', 'CourseController@edit'); // ->  Edit Course Form
        Route::post('/course/edit/{course}', 'CourseController@update'); // ->  Update  Course Data Into Database


        Route::get('/course/episode/delete/{episode}', 'EpisodeController@destroy'); // ->  Delete Course

        Route::get('/course/episode/{course}', 'CourseController@episods'); // ->  Delete Course

                ///   Order List ///

        Route::get('/order/new/{course}', 'OrderController@create'); // ->  Create New Course Form

        Route::get('/order', 'OrderController@index'); // ->  Create New Course Form
        Route::get('/order/delete/{order}', 'OrderController@destroy'); // ->  Create New Course Form
        Route::get('/order/view/{order}', 'OrderController@show'); // ->  Create New Course Form

});
