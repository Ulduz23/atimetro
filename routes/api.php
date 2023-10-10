<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SocialmediaController;
use App\Http\Controllers\Api\HeroİnformationController;
use App\Http\Controllers\Api\StatistikaController;
use App\Http\Controllers\Api\AboutController;

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

Route::get('news', [NewsController::class, 'list']);
Route::post('newsadd',[NewsController::class,'add']);


Route::get('contact', [ContactController::class, 'list']);
Route::post('contactadd', [ContactController::class, 'add']);


Route::get('project', [ProjectController::class, 'list']);
Route::post('projectadd', [ProjectController::class, 'add']);

Route::get('social', [SocialmediaController::class, 'list']);
Route::post('socialadd', [SocialmediaController::class, 'add']);


Route::get('info', [HeroİnformationController::class, 'list']);
Route::post('infoadd', [HeroİnformationController::class, 'add']);


Route::get('statistika', [StatistikaController::class, 'list']);
Route::post('statistikaadd', [StatistikaController::class, 'add']);

Route::get('about', [AboutController::class, 'list']);
Route::post('aboutadd', [AboutController::class, 'add']);