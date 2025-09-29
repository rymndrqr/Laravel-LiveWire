<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class TableRow extends Component{
    public $post;

    public function archive(){
        $this->post->update(['is_archived' => true]);
    }
    public function render(){
        return view('livewire.posts.table-row');
    }
}
