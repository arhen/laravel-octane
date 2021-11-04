<?php

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

// create route function for return json list of fibonacci 100 numbers serve at GET /fibonacci
Route::get('/fibonacci', function () {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < 10; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return response()->json($fibonacci);
});
