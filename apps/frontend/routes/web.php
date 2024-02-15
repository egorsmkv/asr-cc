<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/projects/{id}/show', [ProjectsController::class, 'show'])->name('projects.show');

Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects/save', [ProjectsController::class, 'save'])->name('projects.save');
