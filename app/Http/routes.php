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

Route::get('/', [
    'as'    => 'home',
    'uses'  => 'PagesController@index',
]);

Route::get('portfolio', [
    'as'   => 'portfolio_path',
    'uses' => 'PagesController@portfolio'
]);

Route::get('portfolio/{id}', [
    'as'   => 'project_path',
    'uses' => 'PagesController@show_project_by_id'
]);

Route::get('news/{id}', [
    'as'   => 'news_path',
    'uses' => 'PagesController@show_news_by_id'
]);
Route::get('available', [
    'as'   => 'available_path',
    'uses' => 'PagesController@available'
]);

Route::get('map', [
    'as'   => 'map_path',
    'uses' => 'PagesController@map'
]);

Route::get('contact', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@contact'
]);

Route::post('contact', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@store'
]);

Route::get('admin/places/edit/{id}', [
    'as'   => 'place_path',
    'uses' => 'PlacesController@show'
]);


Route::post('admin/places/edit/{id}', [
    'as'   => 'place_path',
    'uses' => 'PlacesController@update_coords'
]);

Route::get('admin/projects/edit/{id}', [
    'as'   => 'project_edit_path',
    'uses' => 'PlacesController@edit_project_by_id'
]);


Route::post('admin/projects/edit/{id}', [
    'as'   => 'project_edit_path',
    'uses' => 'PlacesController@update_coords_project'
]);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/**
 * Super Admin
 */
Route::get('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst'
]);
Route::post('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst_store'
]);
