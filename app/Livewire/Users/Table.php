<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public $users;
    public function mount(){
        $this->users = User::limit(20)->get();
    }
    public function render()
    {
        return view('livewire.users.table');
    }

}
