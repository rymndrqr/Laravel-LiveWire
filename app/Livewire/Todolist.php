<?php

namespace App\Livewire;

use Livewire\Component;

class Todolist extends Component
{
    public $todos = [];

    public $todo = "";

    public function addToDo(){
        if(trim($this->todo) == '') return;
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }
    public function deleteToDo($index)
{
    unset($this->todos[$index]);
    $this->todos = array_values($this->todos); // reindex the array
}

    public function render()
    {
        return view('livewire.todolist');
    }
}
