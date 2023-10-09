<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', PostController::class);
Route::get('/{post}', [PostController::class, 'show'])->name('show');
Route::get('/{post}/edit',[PostController::class,'edit'])->name('edit');
Route::put('/{post}', [PostController::class, 'update'])->name('update');
Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');