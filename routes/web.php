<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['can:roles-access']], function () {
//     Route::resource('roles', RoleController::class);
// });
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::post('/activate', [UserController::class, 'activate'])->name('activate');
    Route::post('/deactivate', [UserController::class, 'deactivate'])->name('deactivate');
    Route::get('password', [ChangePasswordController::class, 'index']);
    Route::post('password', [ChangePasswordController::class, 'changePassword'])->name('password'); 
});




