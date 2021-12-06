<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*Route::get('/admin', [ContactController::class, 'admin']);*/

Route::prefix('admin')->group(function () {
    Route::get('/', [ContactController::class, 'admin']);
    Route::get('/serch', [ContactController::class, 'serch']);
    Route::get('/reset', [ContactController::class, 'reset']);
    Route::get('/delete', [ContactController::class, 'delete']);
});

Route::prefix('contact')->group(function(){
    Route::get('/',[ContactController::class,'inquiry']);
    Route::post('/confirm', [ContactController::class, 'confirm']);
    Route::post('/revise', [ContactController::class, 'revise']);
    Route::post('/send',[ContactController::class,'send']);
});



