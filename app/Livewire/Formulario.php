<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Formulario as ModelsFormulario;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class Formulario extends Component
{
    use WireUiActions;

    #[Validate('required', as: 'nombre', message: 'El campo :attribute es requerido')]
    #[Validate('min:5', message: 'El campo :attribute tiene muy pocos caracteres')]
    #[Validate('max:50', message: 'El campo :attribute tiene demasiados caracteres')]
    public $nombre;

    #[Validate('required', as: 'descripción', message: 'El campo :attribute es requerido')]
    #[Validate('min:5', message: 'El campo :attribute tiene muy pocos caracteres')]
    #[Validate('max:500', message: 'El campo :attribute tiene demasiados caracteres')]
    public $descripcion;

    public $busqueda;

    public function insertar()
    {
        $this->validate();
        ModelsFormulario::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion
        ]);
        $this->reset(['nombre', 'descripcion']);

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Creado',
            'description' => 'Se inserto correctamente',
        ]);
    }

    public function eliminar($id)
    {
        $this->dialog()->confirm([
            'title' => '',
            'description' => '',
            'accept' => [
                'label' => 'Confirmar',
                'method' => 'confirmar',
                'params' => $id,
            ],
            'reject' => [
                'label' => 'Cancelar',
            ],
        ]);
    }

    public function confirmar($id): void
    {
        ModelsFormulario::find($id)->delete();
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Eliminado con exito',
            'description' => 'Se ha eliminado correctamente',
        ]);
    }


    use WithPagination, WithoutUrlPagination;

    public function render(): View
    {
        $listas = ModelsFormulario::paginate(5);
        if ($this->busqueda != "") {
            $listas = ModelsFormulario::where('nombre', 'LIKE', "%{$this->busqueda}%")->orWhere('descripcion', 'LIKE', "%{$this->busqueda}%")->paginate(5);
        }

        return view('livewire.formulario', compact('listas'));
    }
}
