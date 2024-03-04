<?php

use App\Http\Controllers\PagesController;

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

//Route::get('/','PagesController@home' );
Route::get('/', [PagesController::class, 'home']);


Route::get('/sit',[PagesController::class, 'about'] );

Route::get('/frm',[PagesController::class, 'conn'] );
