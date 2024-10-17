<?php

namespace App\Livewire\Mensajes;

use App\Models\Mensaje;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $mensajes = Mensaje::paginate();

        return view('livewire.mensaje.index', compact('mensajes'))
            ->with('i', $this->getPage() * $mensajes->perPage());
    }

    public function delete(Mensaje $mensaje)
    {
        $mensaje->delete();

        return $this->redirectRoute('mensajes.index', navigate: true);
    }
}
