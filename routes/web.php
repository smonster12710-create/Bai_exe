<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

Route::get('update', [CrudUserController::class, 'update'])->name('user.update');
Route::post('update', [CrudUserController::class, 'postUpdate'])->name('user.postUpdate');

Route::get('list', [CrudUserController::class, 'list'])->name('user.list');


Route::get('/', function () {
    return view('welcome');
});
?>