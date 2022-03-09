<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\DetailPlanController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;


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



Route::prefix('admin')->group(function(){
    Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    /**
     * Routes Profiles
     */
    Route::get('profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::get('profiles', [ProfileController::class, 'index'])->name('profiles.index');
    /**
     * Routes Details Plans
     */
    Route::get('plans/{url}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::post('plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');
    /**
     * Routes Plans
     */
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
    /**
     * Home Dash
     */

    Route::get('/', [PlanController::class, 'index'])->name('admin.index');
    Route::get('/', [SiteController::class, 'index'])->name('site.index');

});



