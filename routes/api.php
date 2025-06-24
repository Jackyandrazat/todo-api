<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ChecklistItemController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// =================== PROTECTED ROUTES ===================
Route::middleware('auth:api')->group(function () {

    // ----------- CHECKLIST -----------
    Route::get('/checklist', [ChecklistController::class, 'index']);
    Route::post('/checklist', [ChecklistController::class, 'store']);
    Route::delete('/checklist/{checklistId}', [ChecklistController::class, 'destroy']);

    // ----------- CHECKLIST ITEMS -----------
    Route::get('/checklist/{checklistId}/item', [ChecklistItemController::class, 'index']);
    Route::post('/checklist/{checklistId}/item', [ChecklistItemController::class, 'store']);
    Route::get('/checklist/{checklistId}/item/{itemId}', [ChecklistItemController::class, 'show']);
    Route::put('/checklist/{checklistId}/item/{itemId}', [ChecklistItemController::class, 'toggleStatus']);
    Route::delete('/checklist/{checklistId}/item/{itemId}', [ChecklistItemController::class, 'destroy']);
    Route::put('/checklist/{checklistId}/item/rename/{itemId}', [ChecklistItemController::class, 'rename']);
});
