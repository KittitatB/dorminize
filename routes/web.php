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
    return view('app');
});

Route::resource('clients','ClientController');

Route::resource('bills','BillController');

Route::resource('dorms','DormController');

Route::resource('staffs','StaffController');

Route::resource('rooms','RoomController');

Route::resource('dormExpenses','DormExpenseController');

Route::resource('roomTypes','RoomTypeController');





