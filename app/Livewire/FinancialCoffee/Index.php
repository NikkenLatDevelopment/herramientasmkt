<?php

namespace App\Livewire\FinancialCoffee;

use Livewire\Component;
use App\Models\Distributor;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Google\Cloud\Storage\StorageClient;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

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
        return view('livewire.financial-coffee.index')->extends('layouts.financial-coffee');
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
                //Consultar datos etapa 2
                $this->table = DB::connection('sqlsrv_SQL_PIMK')->table('Detail_Sperfect')->where('Owner', $this->code)->get()->toArray();
                //Consultar datos etapa 2
            }

            //Validar si ya está registrado
            $exists = DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->where('Associateid', $this->code)->first();
            //Validar si ya está registrado

            if($exists) {
                //Cambiar tab
                $this->tab = 1;
                //Cambiar tab
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

        //Ruta imagen
        $photo = 'sites/regional/cafecito-financiero/images/' . $this->code . '.' . $this->photo->getClientOriginalExtension();
        //Ruta imagen

        //Subir imagen
        $object = $bucket->upload(file_get_contents($this->photo->getRealPath()), [ 'name' => $photo ]);
        //Subir imagen

        if($object) {
            //Validar si ya está registrado
            $exists = DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->where('Associateid', $this->code)->first();
            //Validar si ya está registrado

            if($exists) {
                //Actualizar datos
                DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->where('Associateid', $this->code)->update([
                    'Event' => Carbon::createFromFormat('d-m-Y', $this->date)->format('Y-m-d'),
                    'City' => $this->city,
                    'Photo' => 'https://storage.googleapis.com/vivenikken/' . $photo,
                    'CREATED' => now()
                ]);
            } else {
                //Guardar datos
                DB::connection('sqlsrv_SQL')->table('Associates_CafecitoAbril')->insert([
                    'Associateid' => $this->code,
                    'Event' => Carbon::createFromFormat('d-m-Y', $this->date)->format('Y-m-d'),
                    'City' => $this->city,
                    'Photo' => 'https://storage.googleapis.com/vivenikken/' . $photo,
                    'CREATED' => now()
                ]);
            }

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
