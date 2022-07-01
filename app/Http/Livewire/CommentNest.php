<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentNest extends Component
{
    public $comments = [
        ['id' => 1, 'body' => 'Comment 1','children'=> null],
        ['id' => 2, 'body' => 'Comment 2','children'=> [
            ['id' => 3, 'body' => 'Comment 3','children'=> null],
            ['id' => 4, 'body' => 'Comment 4','children'=> null],
        ]],
        ['id' => 5, 'body' => 'Comment 5','children'=> null],
    ];
    public function render()
    {
        return view('livewire.comment-nest');
    }
}
