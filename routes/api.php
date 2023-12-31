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
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\StationController;
use App\Http\Controllers\Api\BimController;
use App\Http\Controllers\Api\DocsController;



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

Route::get('gallery', [GalleryController::class, 'list']);
Route::post('galleryadd', [GalleryController::class, 'add']);


Route::get('station', [StationController::class, 'list']);
Route::post('stationadd', [StationController::class, 'add']);


Route::get('bim', [BimController::class, 'list']);
Route::post('bimadd', [BimController::class, 'add']);

Route::get('bimimgs', [BimController::class, 'imgs']);
Route::post('bimimgsadd', [BimController::class, 'imgadd']);


Route::get('docs', [DocsController::class, 'list']);
Route::post('docsadd', [DocsController::class, 'add']);