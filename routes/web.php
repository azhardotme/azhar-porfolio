<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SuperAdminController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Models\Portfolio;

//Frontend Route
Route::get('/', [HomeController::class, 'index']);


//Backend route
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/logout', [SuperAdminController::class, 'logout']);
Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);

//About route
Route::resource('/about', AboutController::class);
Route::get('/about/download/{file}', [AboutController::class, 'download']);

//Skill route
Route::resource('/skills', SkillController::class);

//Experience route
Route::resource('/experience', ExperienceController::class);

//Portfolio route
Route::resource('/portfolio', PortfolioController::class);
