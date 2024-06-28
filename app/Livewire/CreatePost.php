<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CreatePost extends Component
{

    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public function render()
    {
        $post = User::paginate($this->perPage);
        return view('livewire.create-post', compact('post'));
    }
}
