<?php 


//Route::get('test/blade/{posts}', [App\Http\Controllers\TestController::class,'show']);
//Route::get('posts/{posts}', [App\Http\Controllers\TestController::class,'show']);
//Route::get('categories/{categories}/{products}', [App\Http\Controllers\TestController::class,'show']);


//Route::get('test/form', [App\Http\Controllers\tom::class,'form']);
//Route::get('test/result', [App\Http\Controllers\tom::class,'result']);


//Route::get('test/form', [App\Http\Controllers\tom::class,'form']);
//Route::post('test/form', [App\Http\Controllers\tom::class,'form']);
//Route::post('/test/result/', [App\Http\Controllers\tom::class,'result']);


//Route::match(['get', 'post'], 'test/form/{id}', [App\Http\Controllers\tom::class,'form']);
//Route::match(['get', 'post'], 'test/method', [App\Http\Controllers\tom::class,'form']);
//Route::match(['get', 'post'], '/test/admin/{param}', [App\Http\Controllers\tom::class, 'result']);


Route::get('test/form', [App\Http\Controllers\tom::class,'form']);
Route::get('/test/result/', [App\Http\Controllers\tom::class,'show']);
?>

