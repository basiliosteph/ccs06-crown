<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheCrownController;

Route::get('/', [TheCrownController::class, 'index']);
Route::get('/chapter/{chapter_number}', [TheCrownController::class, 'readByChapter']);
Route::get('/all-chapters', [TheCrownController::class, 'readAllChapters']);