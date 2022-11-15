<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;


Route::get('/', [TodoListController::class, 'index']);


Route::post('/save-todo', [TodoListController::class, 'saveTodo'])->name('saveTodo');
Route::post('/edit', [TodoListController::class, 'updateTodo'])->name('updateTodo');

Route::get('/delete/{id}', [TodoListController::class, 'deleteItem']);
Route::get('/edit/{id}', [TodoListController::class, 'edit']);