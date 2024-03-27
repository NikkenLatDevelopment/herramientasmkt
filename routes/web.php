<?php

use App\Livewire\BusinessBrochure\Index AS BusinessBrochureIndex;
use App\Livewire\FinancialCoffee\Index AS FinancialCoffeeIndex;
use Illuminate\Support\Facades\Route;

//Folleto de negocio
Route::get('/folleto-negocio/{code}', BusinessBrochureIndex::class)->name('business-brochure.index');
//Folleto de negocio

//Cafecito financiero
Route::get('/cafecito-financiero/{code}', FinancialCoffeeIndex::class)->name('financial-coffee.index');
//Cafecito financiero
