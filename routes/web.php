<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

// CRUD Application

// Read
// Route::get('teachers',[TeacherController::class,'index'])->name('teachers.index');
// Route::get('teachers/{id}',[TeacherController::class,'show'])->name('teachers.show');

// Create
// Route::get('teachers/create',[TeacherController::class,'create'])->name('teachers.create');
// Route::post('teachers/create',[TeacherController::class,'store'])->name('teachers.store');

// Update
// Route::get('teachers/{id}/edit',[TeacherController::class,'edit'])->name('teachers.edit');
// Route::put('teachers/{id}/edit',[TeacherController::class,'update'])->name('teachers.update');

// Delete
// Route::delete('teachers/{id}',[TeacherController::class,'destroy'])->name('teachers.destroy');

// Resource بتعمل كل اللي فووق
Route::resource('teachers', TeacherController::class);
