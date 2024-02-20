<?php

namespace App\Livewire\BusinessBrochure;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        //Mostrar vista
        return view('livewire.business-brochure.index')->extends('layouts.business-brochure');
        //Mostrar vista
    }
}
