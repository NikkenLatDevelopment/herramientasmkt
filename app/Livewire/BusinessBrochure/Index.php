<?php

namespace App\Livewire\BusinessBrochure;

use Livewire\Component;

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

    public function render()
    {
        //Mostrar vista
        return view('livewire.business-brochure.index')->extends('layouts.business-brochure');
        //Mostrar vista
    }

    public function mount(){
        //Inicializar información
        $this->code = '123456';
        $this->country = 2;
        $this->urlPlatformThree = 'https://nikkenlatam.com/platform/?' . base64_encode("5|$this->code|Folleto de Negocio");
        $this->urlPlatformFour = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|NIKKEN App|" . base64_encode("https://nikkenlatam.com/services/welcome-letter/redirect.php"));
        $this->urlSocialOne = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Instagram|" . base64_encode("https://www.instagram.com/nikkenlatam/"));
        $this->urlSocialTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Facebook|" . base64_encode("https://www.facebook.com/NIKKENLAT"));
        $this->urlSocialThree = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|YouTube|" . base64_encode("https://www.youtube.com/user/nikkenlatinoamerica"));
        $this->urlSocialFour = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Spotify|" . base64_encode("https://open.spotify.com/show/3keIHGLxGoA9x6w4Swx1cU?si=b83935a943814e58"));
        $this->urlSocialFive = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|TikTok|" . base64_encode("https://www.tiktok.com/@nikkenlatinoamerica"));
        $this->urlPlatformFive = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Landing|" . base64_encode("https://www.nikkenlatam.com/"));
        $this->urlFileOne = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Objetivo de Bienestar - Financiero|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/objetivo-bienestar-financiero.pdf"));
        $this->urlFileTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Plan de Compensación|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/plan-compensacion.pdf"));
        $this->urlFileThree = 'https://nikkenlatam.com/platform/?' . base64_encode("15|$this->code|Folleto de Negocio|Planifica tus Ganancias|" . base64_encode("https://storage.googleapis.com/vivenikken/sitios/regional/folleto-negocios/archivos/planifica-ganancias.pdf"));
        $this->urlPlatformOne = 'https://nikkenlatam.com/platform/?' . base64_encode("11|$this->code|Folleto de Negocio");
        $this->urlPlatformTwo = 'https://nikkenlatam.com/platform/?' . base64_encode("14|$this->code|Folleto de Negocio");
        $this->urlPlatformSix = 'https://nikkenlatam.com/platform/?' . base64_encode("4|$this->code|Folleto de Negocio");
        $this->urlPlatformSeven = 'https://nikkenlatam.com/platform/?' . base64_encode("12|$this->code|Folleto de Negocio");
        //Inicializar información
    }
}
