<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/**
 * CRUD
 *CREATE- CRIAR DADOS
 *READ - LER DADOS
 *UPDATE- ATUALIZAR
 *DELETE - DELETAR
 *
 */


Route::get('/posts/create',[ PostController::class,'create']);
Route::get('/posts/read',[PostController::class,'read']);
Route::get('posts/all',[PostController::class,'all']);
Route::get('posts/update',[PostController::class,'update']);
Route::get('posts/delete',[PostController::class,'delete']);


Route::get('/', function () {
    return view('welcome');
});
