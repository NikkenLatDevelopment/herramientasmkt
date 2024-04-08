<?php

namespace App\Livewire\FinancialCoffee;

use Livewire\Component;
use App\Models\Distributor;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class Test extends Component
{
    public int $tab = 0;
    public int $stage = 2;

    #[Validate('required')]
    public string $date;

    #[Validate('required')]
    public string $code;

    #[Validate('required')]
    public int $country;

    #[Validate('required')]
    public string $city;

    #[Validate('required|image')]
    public $photo;

    public array $table = [];

    public function render()
    {
        //Mostrar vista
        return view('livewire.financial-coffee.test');
        //Mostrar vista
    }

    public function mount(string $code, string $type = null) {
        try {
            if($type && $type == 'STAFF') {
                //Obtener código sin encriptar
                $this->code = $code;
                //Obtener código sin encriptar
            }else{
                //Obtener código sin encriptar
                $this->code = base64_decode($code);
                //Obtener código sin encriptar
            }

            //Consultar información de usuario
            $distributor = Distributor::where('codigo', $this->code)->where('tipo', 'CI')->where('estatus', 1)->first();
            //Consultar información de usuario

            if(!$distributor){
                //Redireccionar
                return redirect()->to('https://mi.nikkenlatam.com/home');
                //Redireccionar
            }

            //Validar etapa 1
            $stage = DB::connection('sqlsrv_SQL_RS')->table('Etapa1_Seguimiento_Perfect')->where('associateid', $this->code)->first();
            //Validar etapa 1

            if($stage) {
                //Cambiar etapa
                $this->stage = 1;
                //Cambiar etapa
            }else{
                //Consultar bonos y unidades
                $this->table = DB::connection('sqlsrv_SQL_PIMK')->select("SELECT * from Bonos_cafe_marzo(?)", [$this->code]);
                //Consultar bonos y unidades
            }

            //Validar si ya está registrado
            $exists = DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->where('Associateid', $this->code)->first();
            //Validar si ya está registrado

            if($exists) {
                //Cambiar tab
                $this->tab = 1;
                //Cambiar tab
            }

        } catch (\Exception) {
            //Redireccionar
            return redirect()->to('https://mi.nikkenlatam.com/home');
            //Redireccionar
        }
    }

    public function create() {
        //Validar formulario
        $this->validate();
        //Validar formulario

        //Cambiar tab
        $this->tab = 1;
        //Cambiar tab
    }
}
