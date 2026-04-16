<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    //SHOW ALL PROJECTS
    Route::get('/projects', [ProjectController::class, 'index']);
//SHOW FORM TO STORE A NEW PROJECT
    Route::get('/projects/create', [ProjectController::class, 'create']);
//SAVE A NEW PROJECT TO DB
    Route::post('/projects', [ProjectController::class, 'store']);
//SHOW FORM TO UPDATE A SAVED PROJECT
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);
//UPDATE A SAVED PROJECT IN DB
    Route::patch('/projects/{project}', [ProjectController::class, 'update']);
//SHOW CONFIRMATION TO DELETE A SAVED PROJECT
    Route::get('/projects/{project}/delete', [ProjectController::class, 'delete']);
//DELETE A SAVED PROJECT FROM DB
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy']);
//SHOW ONLY ONE SPECIFIC PROJECT
    Route::get('/projects/{project}', [ProjectController::class, 'show']);
//logout
    Route::delete('logout', [SessionsController::class, 'destroy']);
});

Route::middleware('guest')->group(function() {
    //REGISTER
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);

//SESSIONS
//login
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store'])->name('login');
});

//Route::resource('projects', ProjectController::class);
