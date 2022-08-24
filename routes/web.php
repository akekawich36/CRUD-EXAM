<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CompanyCRUDController;

Route::get('companies/create', [CompanyCRUDController::class, 'create']);

Route::get('companies/{id}', [CompanyCRUDController::class, 'show']);

Route::resource('companies', CompanyCRUDController::class);



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

Route::get('', [CompanyCRUDController::class, 'index']);

