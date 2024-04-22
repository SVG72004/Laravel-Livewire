<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.post.post')
            ->layout('layouts.login');
    }
}
