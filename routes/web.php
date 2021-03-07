<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\QualityController;
use Illuminate\Support\Facades\Route;
/*resume\app\Http\Controllers\HomeController.php
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::post('/', [HomeController::class, 'generate']);

Route::redirect('/refresh', '/');


// -------------------------------------------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/builds', [DashboardController::class, 'builds'])->middleware(['auth']);

Route::resource('education', EducationController::class)
->only(['update','show', 'destroy'])->middleware(['auth']);

Route::resource('work', ExperienceController::class)
->only(['update','show', 'destroy'])->middleware(['auth']);

Route::resource('skill', SkillController::class)
->only(['update','show', 'destroy'])->middleware(['auth']);

Route::resource('quality', QualityController::class)
->only(['update','show', 'destroy'])->middleware(['auth']);



require __DIR__.'/auth.php';
