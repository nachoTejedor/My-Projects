<?php

namespace App\Livewire\Mensajes;

use App\Livewire\Forms\MensajeForm;
use App\Models\Mensaje;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MensajeForm $form;

    public function mount(Mensaje $mensaje)
    {
        $this->form->setMensajeModel($mensaje);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('mensajes.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.mensaje.edit');
    }
}
