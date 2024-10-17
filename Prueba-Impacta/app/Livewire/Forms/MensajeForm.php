<?php

namespace App\Livewire\Forms;

use App\Models\Mensaje;
use Livewire\Form;

class MensajeForm extends Form
{
    public ?Mensaje $mensajeModel;
    
    public $name = '';
    public $phone = '';
    public $email = '';
    public $planet = '';
    public $message = '';
    public $result = '';
    public $privacy = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'phone' => 'required|string',
			'email' => 'required|string',
			'planet' => 'required',
			'message' => 'required|string',
			'result' => 'required',
			'privacy' => 'required',
        ];
    }

    public function setMensajeModel(Mensaje $mensajeModel): void
    {
        $this->mensajeModel = $mensajeModel;
        
        $this->name = $this->mensajeModel->name;
        $this->phone = $this->mensajeModel->phone;
        $this->email = $this->mensajeModel->email;
        $this->planet = $this->mensajeModel->planet;
        $this->message = $this->mensajeModel->message;
        $this->result = $this->mensajeModel->result;
        $this->privacy = $this->mensajeModel->privacy;
    }

    public function store(): void
    {
        $this->mensajeModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->mensajeModel->update($this->validate());

        $this->reset();
    }
}
