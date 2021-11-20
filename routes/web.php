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

Route::get('/', [AmethystCoreController::class, 'index']);

Route::get('home', [AmethystCoreController::class, 'home_view']);

Route::get('list', [AmethystCoreController::class, 'list_view']);

Route::get('list/edit/{id}', [AmethystCoreController::class, 'edit_view']);

Route::get('list/delete/{id}', [AmethystCoreController::class, 'preg_delete']);

Route::get('create', [AmethystCoreController::class, 'create_view']);

Route::post('create/save', [AmethystCoreController::class, 'preg_create']);

Route::post('list/update/{id}', [AmethystCoreController::class, 'preg_update']);

/* ====================================================================== */

Route::get('config/general', [AmethystAdminCore::class, 'general_config']);

Route::get('config/status', [AmethystAdminCore::class, 'status_config']);

Route::get('config/portal', [AmethystAdminCore::class, 'portal_config']);
