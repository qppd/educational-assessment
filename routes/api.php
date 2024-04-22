<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->get('/portal', function (Request $request) {
//     return $request->faces();
// });

// Route::middleware('auth:sanctum')->get('/portal/register', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/portal/examinations', function (Request $request) {
//     return $request->examinations();
// });

// Route::middleware('auth:sanctum')->get('/portal/examinations/take', function (Request $request) {
//     return $request->user();
// });

// Student Portal Route
Route::get("/", [PortalController::class, 'portals']);
Route::get("/portal", [PortalController::class, 'portals']);
Route::get("/portal/register", [PortalController::class, 'registerPage']);
Route::post("/portal/register/add", [PortalController::class, 'studentRegister']);

Route::get("/portal/dashboard", [PortalController::class, 'dashboardPage']);
Route::get("/portal/examinations", [PortalController::class, 'examinationsPage']);
Route::get('/find-user/{label}', [PortalController::class, 'findUserByLabel']);
// Student Portal Route
