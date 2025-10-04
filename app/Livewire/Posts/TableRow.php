<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class TableRow extends Component
{
    public Post $post;

    public $confirm = false;

    public function confirmArchive()
    {
        $this->confirm = true;
    }
    public function cancelArchive()
    {
        $this->confirm = false;
    }

    public function archive()
    {
        $this->post->is_archived = true;
        $this->post->save();

    }

    public function unarchive()
    {
        $this->post->is_archived = false;
        $this->post->save();
    }

    public function render()
    {
        return view('livewire.posts.table-row');
    }
}
