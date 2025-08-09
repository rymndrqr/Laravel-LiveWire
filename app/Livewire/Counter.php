<?php
namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $number = 0;

    public function add(){
        $this->number++;
    }

    public function subtract(){
        if ($this->number > 0) {
            $this->number--;
        }


    }

    public function render()
    {
        return view('livewire.counter');
    }
}
