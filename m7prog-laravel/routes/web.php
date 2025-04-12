<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects/add',[ProjectController::class, 'create'])->name('projects.create');

Route::get("/test", function() {
    return view('test', ["greeting" => "Hhaskdj!"]);
})->name('test');

Route::get('/projects/index', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/update', [ProjectController::class, 'update']);
Route::get('/projects/delete', [ProjectController::class, 'delete']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';