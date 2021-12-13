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
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    Route::get('/general', [AmethystAdminCore::class, 'general_config'])->middleware('isOp');
    Route::get('/', function(){ return redirect('config/general'); });
    Route::get('/status', [AmethystAdminCore::class, 'status_config'])->middleware('isOp');
    Route::post('/status/save', [AmethystAdminCore::class, 'save_status'])->middleware('isOp');
    Route::get('/status/create', [AmethystAdminCore::class, 'create_status'])->middleware('isOp');
    Route::get('/status/delete/{id}', [AmethystAdminCore::class, 'delete_status'])->middleware('isOp');
    Route::get('/portal', [AmethystAdminCore::class, 'portal_config'])->middleware('isAdmin');
    Route::post('/portal/save', [AmethystAdminCore::class, 'save_portal'])->middleware('isAdmin');
    Route::get('/portal/create', [AmethystAdminCore::class, 'create_portal'])->middleware('isAdmin');
    Route::get('/portal/delete/{id}', [AmethystAdminCore::class, 'delete_portal'])->middleware('isAdmin');
    Route::get('/user/list', [AmethystAdminCore::class, 'user_list_view'])->middleware('isOp');
});

/* ==================================[ USER CORE CONTROLLER ]==================================== */

Route::prefix('login')->group(function () {
    Route::get('/', [AmethystUserCore::class, 'view_login'])->name('login');
    Route::post('/auth', [AmethystUserCore::class, 'auth_user']);
});

Route::get('/logout', [AmethystUserCore::class, 'logout']);

Route::prefix('config/user')->middleware('auth')->middleware('isOp')->group(function () {
    Route::get('/edit/{id}', [AmethystUserCore::class, 'edit_user']);
});

Route::prefix('user')->middleware('auth')->middleware('isOp')->group(function () {
    Route::get('/delete/{id}', [AmethystUserCore::class, 'delete_user']);
    Route::post('/edit/save', [AmethystUserCore::class, 'save_user']);
});
