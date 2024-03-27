<?php

namespace App\Livewire\FinancialCoffee;

use Livewire\Component;
use App\Models\Distributor;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Google\Cloud\Storage\StorageClient;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public int $tab = 0;

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

    public function render()
    {
        //Mostrar vista
        return view('livewire.financial-coffee.index')->extends('layouts.financial-coffee');
        //Mostrar vista
    }

    public function mount(string $code) {
        try {
            //Obtener código sin encriptar
            $this->code = base64_decode($code);
            //Obtener código sin encriptar

            //Consultar información de usuario
            $distributor = Distributor::where('codigo', $this->code)->where('tipo', 'CI')->where('estatus', 1)->first();
            //Consultar información de usuario

            if(!$distributor){
                //Redireccionar
                return redirect()->to('https://mi.nikkenlatam.com/home');
                //Redireccionar
            }
        } catch (\Exception $e) {
            //Redireccionar
            return redirect()->to('https://mi.nikkenlatam.com/home');
            //Redireccionar
        }
    }

    public function create() {
        //Validar formulario
        $this->validate();
        //Validar formulario

        //Obtener datos conexión google cloud
        $storage = new StorageClient([ 'keyFilePath' => resource_path('others/google-cloud.json') ]);
        //Obtener datos conexión google cloud

        //Definir bucket
        $bucket = $storage->bucket('vivenikken');
        //Definir bucket

        //Subir imagen
        $object = $bucket->upload(file_get_contents($this->photo->getRealPath()), [ 'name' => 'sites/regional/cafecito-financiero/images/' . $this->code . '.' . $this->photo->getClientOriginalExtension() ]);
        //Subir imagen

        if($object) {
            //Guardar datos
            DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->insert([
                'Associateid' => $this->code
            ]);

            //Cambiar tab
            $this->tab = 1;
            //Cambiar tab
        } else {
            //Mostrar mensaje
            $this->addError('photo', 'Ocurrió un error al subir la imagen, inténtalo en unos minutos.');
            //Mostrar mensaje
        }
    }
}
