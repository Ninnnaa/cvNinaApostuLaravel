<?php

use App\Http\Controllers\PersonalDataController;
use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Skill;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personalData', function () {
    return PersonalData::all();
});

Route::get('/experience', function () {
    return Experience::all();
});

Route::get('/skills', function () {
    return Skill::all();
});

Route::get('/data', [PersonalDataController::class, 'index']);
