<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\OperationController;

Route::get('/', function () {
  return view('Home');
});

/*========================================================================
Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('app_home');
});*/


/***************************************************************************** */
Route::controller(ProjetController::class)->group(function(){
    Route::get('/listeP','liste_P')->name('app_liste_P');
    Route::post('/addP','add_P')->name('app_add_P');
});

/***************************************************************************** */
Route::controller(OperationController::class)->group(function(){
    Route::get('/listeOp','liste_Op')->name('app_liste_Op');
    Route::post('/addOp','add_Op')->name('app_add_Op');
});
