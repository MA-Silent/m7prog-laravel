<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects/add',[ProjectController::class, 'create'])->name('projects.create');

Route::get('/projects/index', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/update', [ProjectController::class, 'update']);
Route::get('/projects/delete', [ProjectController::class, 'delete']);
Route::get('/projects/{reqId}',[ProjectController::class, 'show'])->name('project.show');

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group( function() {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resources(
        [
            'projectadmin'=> ProjectAdminController::class,
        ]
    );
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';