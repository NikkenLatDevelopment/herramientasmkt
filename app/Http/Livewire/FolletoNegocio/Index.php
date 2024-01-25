<?php

namespace App\Http\Livewire\FolletoNegocio;

use Livewire\Component;

class Index extends Component
{
    public function render(){
        //Mostrar vista
        return view('livewire.folleto-negocio.index')->layout('layouts.folleto-negocio');
        //Mostrar vista
    }
}
