<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\MapController;

Route::post('/blocks', 'BlockController@store');

Route::get('/map', [MapController::class, 'index']);
Route::post('/organizations', [MapController::class, 'createOrganization']);