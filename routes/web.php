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

Auth::routes();

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', "IndexController@index");

Route::get('/news', "NewsController@index");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tutors', function() {
    return view('tutors')->with(['title' => 'Репетиторы']);
})->name('tutors');

Route::get('/tuition-centers', function() {
    return view('tuition-centers')->with(['title' => 'Центры обучения']);
})->name('tuition-centers');

// account
Route::middleware(['auth'])->group(function () {
    Route::get('/tutor/dashboard', 'User\DashboardController@index')->name('tutor-dashboard');
    Route::get('/tutor/profile', 'User\ProfileController@index')->name('tutor-profile');
    Route::get('/tutor/schedule', function() {
        return view('user.schedule')->with(['title' => 'Расписание']);
    })->name('tutor-schedule');
    Route::get('/tutor/schedule', function() {
        return view('user.schedule')->with(['title' => 'Расписание']);
    })->name('tutor-schedule');
});
