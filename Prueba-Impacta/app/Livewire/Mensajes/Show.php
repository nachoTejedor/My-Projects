<?php

namespace App\Livewire\Mensajes;

use App\Livewire\Forms\MensajeForm;
use App\Models\Mensaje;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public MensajeForm $form;

    public function mount(Mensaje $mensaje)
    {
        $this->form->setMensajeModel($mensaje);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.mensaje.show', ['mensaje' => $this->form->mensajeModel]);
    }
}
