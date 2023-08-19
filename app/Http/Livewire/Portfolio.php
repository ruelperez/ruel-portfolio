<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Portfolio extends Component
{
    public $base=4, $hover=0;
    public function render()
    {
        return view('livewire.portfolio');
    }

    public function nav_click($id){
        $this->base = $id;
    }

    public function hoverIn($id){
        $this->hover = $id;
    }

    public function hoverOut(){
        $this->hover = 0;
    }
}
