<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\OvertimePayController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index'); //
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store'); // 
Route::get('/overtimes', [OvertimeController::class, 'index'])->name('overtimes.index');
Route::post('/overtimes', [OvertimeController::class, 'store'])->name('overtimes.store');
Route::get('/overtimes-pays/calculate', OvertimePayController::class)->name('overtimes-pays.index');
Route::patch('/settings', [SettingController::class, 'update'])->name('settings.index'); //

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
