<?php 


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'start'])->name('home');
Route::get('/page', [App\Http\Controllers\ComicController::class, 'show']);
Route::get('/map', [App\Http\Controllers\HomeController::class, 'mape'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'abo'])->name('home');
Route::get('/page/{id}', [App\Http\Controllers\ComicController::class, 'single_comics']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>