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


Route::get('/', 'MasterController@index');
Route::get('/about-us', 'MasterController@aboutUs');
Route::get('/contact-us', 'FeedbackController@index');
Route::post('/contact-us', 'FeedbackController@saveFeedback');
Route::get('/property-management', 'MasterController@propertyManagement');


// property list
Route::get('/properties', 'ListPropertyController@index');
Route::get('/filter', 'ListPropertyController@filterList');
Route::post('/filter', 'ListPropertyController@filterList');
Route::get('/properties/{categ}', 'ListPropertyController@listByCategory');
Route::get('/properties/{categ}/{stat}', 'ListPropertyController@listByStatus');
Route::get('/properties/{categ}/{stat}/{refID}', 'ListPropertyController@propertyDetails');





Route::get('/apanel', 'ApanelHomeController@index');
Route::get('/apanel/login', 'ApanelUserController@index');
Route::post('/apanel/login', 'ApanelUserController@loginUser');
Route::get('/apanel/realestate', 'ApanelRealEstateController@propertyList');
Route::get('/apanel/realestate/details/{refID}', 'ApanelRealEstateController@propertyDetails');
Route::get('/apanel/realestate/addnew', 'ApanelRealEstateController@showAddNew');
Route::post('/apanel/realestate/addnew', 'ApanelRealEstateController@saveAddNew');
Route::get('/apanel/realestate/edit/{refID}', 'ApanelRealEstateController@showEdit');
Route::post('/apanel/realestate/edit/{refID}', 'ApanelRealEstateController@saveEdit');
Route::get('/apanel/realestate/delete/{refID}', 'ApanelRealEstateController@deleteDetails');

/*
Route::group(['prefix' => 'apanel', 'namespace' => 'Apanel'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('apanel.auth.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('apanel.logout');
    Route::get('dashboard', 'APanelHomeController@index');

    /*Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register')->name('apanel.register');
    Route::get('register', 'HomeController@index');
    Route::post('register', 'HomeController@index');*/
//});