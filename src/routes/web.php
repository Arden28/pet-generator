<?php

use Arden28\PetGenerator\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('cats', PetController::class);
