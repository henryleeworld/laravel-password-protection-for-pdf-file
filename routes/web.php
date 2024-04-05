<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('pdf/encrypt/', [PdfController::class, 'encrypt']);
