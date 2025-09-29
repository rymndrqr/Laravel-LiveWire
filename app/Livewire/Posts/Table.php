<?php

namespace App\Livewire\Posts;
use App\Models\Post;
use Livewire\Component;


class Table extends Component
{
    public $posts;
    public function mount(){
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.posts.table');
    }

}
