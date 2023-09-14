<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddEmployee;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

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

Route::middleware(['login'])->group(function () {
    Route::get('/login', function () {
        return view('login', ['message' => '']);
    });
    Route::post('/login_page', [LoginController::class, 'login']);
});
////////////////////group middleware fotr admin group //////////
Route::middleware(['adminauth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/adminui', function () {
        return view('adminui', ['messege' => ""]);
    });
    Route::get('/adminui_add_inventory', function () {
        return view('adminui_add_inventory', ['data' => ""]);
    });
    Route::get('/adminui_inventory_list', [InventoryController::class, 'table']);
    Route::get('/adminui_employee_list/{id}', [AddEmployee::class, 'delete']);
    Route::get("/delete/{id}", [InventoryController::class, 'delete']);
    Route::post('/assign', [InventoryController::class, 'assign']);
    Route::get('/adminui_employee_list', [AddEmployee::class, 'table']);
    Route::post('/add_page', [AddEmployee::class, 'add']);
    Route::post('/upload-image', [InventoryController::class, 'add'])->name('upload.image');
    /////logout//////////
    Route::get('/logout', function () {
        session()->forget('key');
        return redirect('/login');
    });
});
