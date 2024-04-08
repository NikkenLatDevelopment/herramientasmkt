<?php

use App\Livewire\BusinessBrochure\Index AS BusinessBrochureIndex;
use App\Livewire\FinancialCoffee\Index AS FinancialCoffeeIndex;
use App\Livewire\FinancialCoffee\Test AS FinancialCoffeeTest;
use Illuminate\Support\Facades\Route;

//Folleto de negocio
Route::get('/folleto-negocio/{code}', BusinessBrochureIndex::class)->name('business-brochure.index');
//Folleto de negocio

//Cafecito financiero
Route::get('/cafecito-financiero/{code}/{type?}', FinancialCoffeeIndex::class)->name('financial-coffee.index');
Route::get('/cafecito-financiero-test/{code}/{type?}', FinancialCoffeeTest::class)->name('financial-coffee.test');
//Cafecito financiero
