<?php

use App\Livewire\Product;
use App\Livewire\ProductCreate;
use App\Livewire\ProductEdit;
use Illuminate\Support\Facades\Route;

Route::get('/', Product::class, 'index')->name('product.index');
Route::get('/product', ProductCreate::class, 'index')->name('product.create');
Route::get('/product/{id}', ProductEdit::class, 'index')->name('product.edit');
