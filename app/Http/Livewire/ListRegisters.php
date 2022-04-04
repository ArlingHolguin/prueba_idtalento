<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
use Livewire\WithPagination;

class ListRegisters extends Component
{
    use WithPagination;

    public function render()
    {

        $registros = Form::latest()->paginate(20);
        

        return view('livewire.list-registers', compact('registros'));
    }
}
