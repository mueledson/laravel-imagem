<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProduto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ControllerProduto::class, 'index'])->name('produto.index');

Route::get('/create', [ControllerProduto::class, 'create'])->name('produto.create');
Route::post('/store', [ControllerProduto::class, 'store']) ->name('produto.store');

Route::get('/show/{produto}', [ControllerProduto::class, 'show'])->name('produto.show');
Route::get('/edit/{produto}', [ControllerProduto::class, 'edit'])->name('produto.edit');
Route::put('/update/{produto}', [ControllerProduto::class, 'update'])->name('produto.update');
Route::delete('/destroy/{produto}', [ControllerProduto::class, 'destroy'])->name('produto.destroy');