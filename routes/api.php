<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/me', [AuthController::class, 'me']);

    Route::apiResource('/tareas', TareaController::class);
/*     Route::api('/tareas', [TareaController::class, 'index']);
    Route::api('/tareas', [TareaController::class, 'store']);
    Route::api('/tareas', [TareaController::class, 'show']);
    Route::api('/tareas', [TareaController::class, 'update']);
    Route::api('/tareas', [TareaController::class, 'destroy']);
 */
    Route::post('/permisos', [PermisoController::class, 'store']);
});

Route::post('/roles', [RolesController::class, 'store']);

Route::apiResource('/users', UserController::class);

Route::apiResource('/roles', RolesController::class);

//Route::apiResource('/tareas', TareaController::class);

Route::apiResource('/permisos', PermisoController::class);









