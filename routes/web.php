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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\QosApiController;

Route::get('/', [QosApiController::class, 'index'])->name('index');
Route::get('/get_status', [QosApiController::class, 'get_status'])->name('get_status');
Route::get('/deposit', [QosApiController::class, 'deposit'])->name('deposit');
Route::get('/refund', [QosApiController::class, 'refund'])->name('refund');
Route::get('/get_available_amount_to_withdraw', [QosApiController::class, 'get_available_amount_to_withdraw'])->name('get_available_amount_to_withdraw');
Route::get('/get_account_holder_info', [QosApiController::class, 'get_account_holder_info'])->name('get_account_holder_info');
Route::get('/get_account_holder_info_mv', [QosApiController::class, 'get_account_holder_info_mv'])->name('get_account_holder_info_mv');