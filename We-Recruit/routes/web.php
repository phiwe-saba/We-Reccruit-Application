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
    return view('welcome');
});

Route::get('applicant', 'App\Http\Controllers\ApplicantController@index');
Route::post('applicant', 'App\Http\Controllers\ApplicantController@store');
Route::get('vacancies', 'App\Http\Controllers\VacancyController@index');
Route::get('job', 'App\Http\Controllers\JobController@list');
Route::post('job', 'App\Http\Controllers\JobController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
