<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("" , [EmployeeController::class, "index"]);


Route :: post('register',[AuthController :: class,'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get("employeeslist", [EmployeeController::class, "show"]);
    Route::post("employees/individualdata", [EmployeeController::class, "store"]);
    Route::get("employees/{id}/detail", [EmployeeController::class, "filtering"]);
    Route::put("employees/{id}/update", [EmployeeController::class, "update"]);
    Route::delete("employees/{id}/delete", [EmployeeController::class, "destroy"]);
});
