<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'ClientController@index');
Route::get('/admin', 'AdminController@admin');
Route::get('/hall', 'ClientHallController@hall');
Route::get('/payment', 'ClientPaymentController@payment');
Route::get('/ticket', 'ClientTicketController@ticket');