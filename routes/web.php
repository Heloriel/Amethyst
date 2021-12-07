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

Route::get('/', [AmethystCoreController::class, 'view_home']);

Route::get('/login', [AmethystCoreController::class, 'view_login']);

Route::get('/create', [AmethystCoreController::class, 'view_create']);

Route::get('/biddings/list', [AmethystCoreController::class, 'view_biddings_list']);

Route::get('/budgets/list', [AmethystCoreController::class, 'view_budgets_list']);

Route::get('/edit/{id}', [AmethystCoreController::class, 'view_edit']);

Route::get('/delete/{id}', [AmethystCoreController::class, 'preg_delete']);

Route::post('/create/save', [AmethystCoreController::class, 'preg_create']);

Route::post('/edit/save/{id}', [AmethystCoreController::class, 'preg_update']);


/* ====================================================================== */

Route::get('config/general', [AmethystAdminCore::class, 'general_config']);

Route::get('config/', [AmethystAdminCore::class, 'general_config_redirect']);

Route::get('config/status', [AmethystAdminCore::class, 'status_config']);

Route::post('config/status/save', [AmethystAdminCore::class, 'save_status']);

Route::get('config/status/create', [AmethystAdminCore::class, 'create_status']);

Route::get('config/status/delete/{id}', [AmethystAdminCore::class, 'delete_status']);

Route::get('config/portal', [AmethystAdminCore::class, 'portal_config']);

Route::post('config/portal/save', [AmethystAdminCore::class, 'save_portal']);

Route::get('config/portal/create', [AmethystAdminCore::class, 'create_portal']);

Route::get('config/portal/delete/{id}', [AmethystAdminCore::class, 'delete_portal']);
