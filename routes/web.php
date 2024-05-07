<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


Route::get('/',[PortfolioController::class,'index'])->name('page.index');
Route::post('/',[PortfolioController::class,'sendmail']);
