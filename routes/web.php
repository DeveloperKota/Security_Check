<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;
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

//Route::post('auth/logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/form/first', 'FormController@form_first')->middleware('auth');

Route::post('/form/second', 'FormController@form_second')->middleware('auth');

Route::post('/form/third', 'FormController@form_third')->middleware('auth');

Route::post('/form/forth', 'FormController@form_forth')->middleware('auth');

Route::get('/form/result', 'FormController@form_result')->middleware('auth');

Route::get('/logout', 'FormController@user_logout');


