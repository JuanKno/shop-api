<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Buyers
Route::apiResource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

// Categories
Route::apiResource('categories', 'Category\CategoryController');

// Products
Route::apiResource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

// Sellers
Route::apiResource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

// Transaction
Route::apiResource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

// Users
Route::apiResource('users', 'User\UserController');
