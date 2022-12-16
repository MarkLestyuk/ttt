<?php 


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'start'])->name('home');
Route::get('/map', [App\Http\Controllers\HomeController::class, 'mape'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'abo'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/page/release_date/page_1/{id}', [App\Http\Controllers\ComicController::class, 'single_comics']);
Route::get('/page', [App\Http\Controllers\ComicController::class, 'show']);
Route::get('/page/{name}/{nap}', [App\Http\Controllers\ComicController::class, 'showSort']);
Route::get('/page/{name}', [App\Http\Controllers\ComicController::class, 'showFilter']);
Route::get('/page_1/{id}', [App\Http\Controllers\ComicController::class, 'single_comics']);
Route::get('/page/release_date/{id}', [App\Http\Controllers\ComicController::class, 'single_comics']);
Route::get('/page/release_date/page_1/{id}', [App\Http\Controllers\ComicController::class, 'single_comics']);
Route::get('/', [App\Http\Controllers\ComicController::class, 'comicsi'])
?>