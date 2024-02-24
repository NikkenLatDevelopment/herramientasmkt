<?php

namespace App\Livewire\BusinessBrochure;

use Livewire\Component;
use App\Models\Distributor;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $code;
    public $country;
    public $urlSocialOne;
    public $urlSocialTwo;
    public $urlSocialThree;
    public $urlSocialFour;
    public $urlSocialFive;
    public $urlFileOne;
    public $urlFileTwo;
    public $urlFileThree;
    public $urlPlatformOne;
    public $urlPlatformTwo;
    public $urlPlatformThree;
    public $urlPlatformFour;
    public $urlPlatformFive;
    public $urlPlatformSix;
    public $urlPlatformSeven;
    public $formData = [];

    public function render()
    {
        //Mostrar vista
        return view('livewire.business-brochure.index')->extends('layouts.business-brochure');
        //Mostrar vista
    }

    public function mount(string $code){
        try {
            //Obtener código sin encriptar
            $code = base64_decode($code);
            //Obtener código sin encriptar

            //Consultar información de usuario
            $distributor = Distributor::where('codigo', $code)->where('tipo', 'CI')->where('estatus', 1)->first();
            //Consultar información de usuario

            if(!$distributor){
                //Redireccionar
                return redirect()->to('https://mi.nikkenlatam.com/home');
                //Redireccionar
            }

            //Obtener la información o crearla si no existe
            $formData = Form::firstOrNew(['code' => $distributor->codigo]);
            //Obtener la información o crearla si no existe

            if (!$formData->exists) {
                //Crear los datos
                $formData->save();
                //Crear los datos
            }

            //Recuperar información
            $this->formData = $formData->toArray();
            //Recuperar información

            //Inicializar información
            $this->code = $distributor->codigo;
            $this->country = $distributor->pais;
            $this->urlPlatformOne = 'https://nikkenlatam.com/platform/?' . base64_encode("11|$this->code|Folleto de Negocio");
            $this->urlPlatformTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("14|$this->code|Folleto de Negocio");
            $this->urlPlatformThree = 'https://nikkenlatam.com/platform/?' . base64_encode("5|$this->code|Folleto de Negocio");
            $this->urlPlatformFour = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|NIKKEN App|" . base64_encode("https://nikkenlatam.com/services/welcome-letter/redirect.php"));
            $this->urlPlatformFive = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Landing|" . base64_encode("https://www.nikkenlatam.com/"));
            $this->urlPlatformSix = 'https://nikkenlatam.com/platform/?' . base64_encode("4|$this->code|Folleto de Negocio");
            $this->urlPlatformSeven = 'https://nikkenlatam.com/platform/?' . base64_encode("12|$this->code|Folleto de Negocio");
            $this->urlSocialOne = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Instagram|" . base64_encode("https://www.instagram.com/nikkenlatam/"));
            $this->urlSocialTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Facebook|" . base64_encode("https://www.facebook.com/NIKKENLAT"));
            $this->urlSocialThree = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|YouTube|" . base64_encode("https://www.youtube.com/user/nikkenlatinoamerica"));
            $this->urlSocialFour = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Spotify|" . base64_encode("https://open.spotify.com/show/3keIHGLxGoA9x6w4Swx1cU?si=b83935a943814e58"));
            $this->urlSocialFive = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|TikTok|" . base64_encode("https://www.tiktok.com/@nikkenlatinoamerica"));
            $this->urlFileOne = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Objetivo de Bienestar - Financiero|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/objetivo-bienestar-financiero.pdf"));
            $this->urlFileTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Plan de Compensación|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/plan-compensacion.pdf"));
            $this->urlFileThree = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Planifica tus Ganancias|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/planifica-ganancias.pdf"));
            //Inicializar información
        } catch (\Exception $e) {
            //Redireccionar
            return redirect()->to('https://mi.nikkenlatam.com/home');
            //Redireccionar
        }
    }

    public function updated(){
        try {
            //Validar información
            $form = Form::where('code', $this->code)->first();
            //Validar información

            if($form){
                //Actualizar información
                $form->update($this->formData);
                //Actualizar información
            }
        } catch (\Exception $e) {
            //Redireccionar
            return redirect()->to('https://mi.nikkenlatam.com/home');
            //Redireccionar
        }
    }
}
