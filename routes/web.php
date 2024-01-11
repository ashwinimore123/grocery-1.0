<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// routes/web.php

use App\Http\Controllers\GroceryController;

Route::get('/index', [GroceryController::class, 'getInventory']);

Route::post('/add_item', [GroceryController::class, 'addItem']);



 