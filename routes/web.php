<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollController;   
use App\Http\Controllers\OptionController;


   
Route::get('/', [PollController::class, 'index'])->name('polls.index');


Route::get('/polls/{poll}', [PollController::class, 'show'])->name('polls.show');


Route::post('/options/{option}/vote', [OptionController::class, 'vote'])->name('options.vote');

