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
	return view('projects.index');
});

Route::get('/projects/open-government', function () {
	return view('projects.open-government');
});

Route::get('/projects/league', function () {
	return view('projects.league');
});

Route::get('/projects/playwalk', function () {
	return view('projects.playwalk');
});

Route::get('/projects/frontend-demos', function () {
	return view('projects.frontend-demos');
});

Route::get('/projects/focus', function () {
	return view('projects.focus');
});

Route::get('/projects', function () {
	return view('projects.index');
});

Route::get('/moments', function () {
	return view('moments');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
