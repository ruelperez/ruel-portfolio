<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Portfolio extends Component
{
    public $base=0;
    public function render()
    {
        return view('livewire.portfolio');
    }

    public function nav_click($id){
        $this->base = $id;
    }
}
