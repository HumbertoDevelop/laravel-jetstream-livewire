<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::resource('products', HomeController::class)->names('admin.products');
Route::resource('shops', ShopController::class)->names('admin.shops');
Route::resource('vendors', VendorController::class)->names('admin.vendors');
Route::resource('warehouses', WarehouseController::class)->names('admin.warehouses');
Route::resource('inventories', InventoryController::class)->names('admin.inventories');

