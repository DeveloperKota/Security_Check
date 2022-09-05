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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form_first', 'FormController@form_first');

Route::post('/form_second', 'FormController@form_second');

Route::post('/form_third', 'FormController@form_third');

Route::post('/form_forth', 'FormController@form_forth');

Route::get('/mail', 'MailSendController@send');

