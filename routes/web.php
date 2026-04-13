<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

//Route::resource('projects', ProjectController::class);
