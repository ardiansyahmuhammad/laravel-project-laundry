<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\DetailOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\ProfileController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/view_status', [ClientController::class, 'view_status'])->name('view_status');
Route::get('/view_dashboard', [ClientController::class, 'view_dashboard']);
Route::get('/view_history', [ClientController::class, 'view_history']);
Route::get('/view_settings', [ClientController::class, 'view_settings']);

// admin
// Route::get('/', [AdminController::class, 'index']);
// Route::get('/update_order', [AdminController::class, 'update_order']);
// Route::get('/delete_order', [AdminController::class, 'delete_order']);

Route::get('/location', [AdminController::class, 'create_location'])->name('location');
Route::post('/store', [AdminController::class, 'store'])->name('storeLocation');
Route::get('/getAllDaerah', [AdminController::class, 'getAllDaerah'])->name('getAllDaerah');
Route::get('/deleteDaerah/{id}', [AdminController::class, 'deleteDaerah'])->name('deleteDaerah');


Route::get('/showAllUser', [AdminController::class, 'getAllUser'])->name('showAllUser');
Route::get('/createUser', [AdminController::class, 'createUser'])->name('createUser');
Route::post('/update_user/{user}', [AdminController::class, 'update_user'])->name('update_user');
Route::get('/delete_user', [AdminController::class, 'delete_user']);
Route::get('/userView/{user}', [AdminController::class, 'showUser'])->name('userView');

// OrderController
Route::get('/view_order', [OrderController::class, 'index']);
Route::post('/order-store', [OrderController::class, 'store'])->name('orderStore');
Route::get('/pengiriman/{order}', [OrderController::class, 'show'])->name('pengiriman');
Route::post('/updateOrder/{order}', [OrderController::class, 'update'])->name('updateOrder');
Route::get('/status', [OrderController::class, 'getAllStatus'])->name('status.list');
Route::get('/order_destroy/{id}', [OrderController::class, 'destroy'])->name('order_destroy');
// Route::get('/form-pengiriman', [OrderController::class, 'create'])->name('createPengiriman');

// DetailOrder Controller
Route::post('/detail-store', [DetailOrderController::class, 'store'])->name('detailStore');
Route::post('/update', [DetailOrderController::class, 'update'])->name('detailUpdate');
// Route::get('/', [])

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('status/list', [ClientController::class, 'getAllStatus'])
//     ->name('status.list');

// Route::get('/statusView/{status}', [ClientController::class, 'show'])->name('statusView');
Route::get('/redirect', [HomeController::class, 'redirect']);
require __DIR__ . '/auth.php';