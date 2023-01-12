<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeCatalog;


Route::get('/', [homeCatalog::class, 'index']);