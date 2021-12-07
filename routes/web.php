<?php

use App\Http\Controllers\AmethystAdminCore;
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

use App\Http\Controllers\AmethystCoreController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AmethystCoreController::class, 'view_home'])->middleware('auth');

Route::get('/login', [AmethystCoreController::class, 'view_login'])->name('login');

Route::post('/login/auth', [AmethystCoreController::class, 'auth_user']);

Route::get('/logout', [AmethystCoreController::class, 'logout']);

Route::get('/create', [AmethystCoreController::class, 'view_create'])->middleware('auth');

Route::get('/biddings/list', [AmethystCoreController::class, 'view_biddings_list'])->middleware('auth');

Route::get('/budgets/list', [AmethystCoreController::class, 'view_budgets_list'])->middleware('auth');

Route::get('/edit/{id}', [AmethystCoreController::class, 'view_edit'])->middleware('auth');

Route::get('/delete/{id}', [AmethystCoreController::class, 'preg_delete'])->middleware('auth');

Route::post('/create/save', [AmethystCoreController::class, 'preg_create'])->middleware('auth');

Route::post('/edit/save/{id}', [AmethystCoreController::class, 'preg_update'])->middleware('auth');


/* ====================================================================== */

Route::get('config/general', [AmethystAdminCore::class, 'general_config'])->middleware('auth');

Route::get('config/', [AmethystAdminCore::class, 'general_config_redirect'])->middleware('auth');

Route::get('config/status', [AmethystAdminCore::class, 'status_config'])->middleware('auth');

Route::post('config/status/save', [AmethystAdminCore::class, 'save_status'])->middleware('auth');

Route::get('config/status/create', [AmethystAdminCore::class, 'create_status'])->middleware('auth');

Route::get('config/status/delete/{id}', [AmethystAdminCore::class, 'delete_status'])->middleware('auth');

Route::get('config/portal', [AmethystAdminCore::class, 'portal_config'])->middleware('auth');

Route::post('config/portal/save', [AmethystAdminCore::class, 'save_portal'])->middleware('auth');

Route::get('config/portal/create', [AmethystAdminCore::class, 'create_portal'])->middleware('auth');

Route::get('config/portal/delete/{id}', [AmethystAdminCore::class, 'delete_portal'])->middleware('auth');
