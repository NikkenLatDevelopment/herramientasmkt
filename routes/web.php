<?php

use App\Livewire\BusinessBrochure\Index AS BusinessBrochureIndex;
use Illuminate\Support\Facades\Route;

//Folleto de negocio
Route::get('/folleto-negocio', BusinessBrochureIndex::class)->name('business-brochure.index');
//Folleto de negocio
