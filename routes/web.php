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

use App\Http\Controllers\AmethystCoreController;
use App\Http\Controllers\AmethystAdminCore;
use App\Http\Controllers\AmethystUserCore;

use Illuminate\Support\Facades\Route;

/* ==================================[ CORE CONTROLLER ]==================================== */

Route::get('/', [AmethystCoreController::class, 'view_home'])->middleware('auth');

Route::prefix('list')->middleware('auth')->group(function () {
    Route::get('/biddings', [AmethystCoreController::class, 'view_biddings_list']);
    Route::get('/budgets', [AmethystCoreController::class, 'view_budgets_list']);
});

Route::prefix('edit')->middleware('auth')->group(function () {
    Route::get('/{id}', [AmethystCoreController::class, 'view_edit'])->middleware('auth');
    Route::post('/save/{id}', [AmethystCoreController::class, 'preg_update'])->middleware('auth');
});

Route::prefix('create')->middleware('auth')->group(function () {
    Route::get('/', [AmethystCoreController::class, 'view_create'])->middleware('auth');
    Route::post('/save', [AmethystCoreController::class, 'preg_create'])->middleware('auth');
});

Route::get('/delete/{id}', [AmethystCoreController::class, 'preg_delete'])->middleware('auth');

/* ==================================[ ADMIN CORE CONTROLLER ]==================================== */

Route::prefix('config')->middleware('auth')->group(function () {
    Route::get('/general', [AmethystAdminCore::class, 'general_config']);
    Route::get('/', function(){ return redirect('config/general'); });
    Route::get('/status', [AmethystAdminCore::class, 'status_config']);
    Route::post('/status/save', [AmethystAdminCore::class, 'save_status']);
    Route::get('/status/create', [AmethystAdminCore::class, 'create_status']);
    Route::get('/status/delete/{id}', [AmethystAdminCore::class, 'delete_status']);
    Route::get('/portal', [AmethystAdminCore::class, 'portal_config']);
    Route::post('/portal/save', [AmethystAdminCore::class, 'save_portal']);
    Route::get('/portal/create', [AmethystAdminCore::class, 'create_portal']);
    Route::get('/portal/delete/{id}', [AmethystAdminCore::class, 'delete_portal']);
    Route::get('/user/list', [AmethystAdminCore::class, 'user_list_view']);
});

/* ==================================[ USER CORE CONTROLLER ]==================================== */

Route::prefix('login')->group(function () {
    Route::get('/', [AmethystUserCore::class, 'view_login'])->name('login');
    Route::post('/auth', [AmethystUserCore::class, 'auth_user']);
});

Route::get('/logout', [AmethystUserCore::class, 'logout']);
