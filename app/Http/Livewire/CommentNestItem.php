<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentNestItem extends Component
{
    public $comment;

//    public $listeners = ['comment.updated' => 'commentUpdated'];
    protected function getListeners()
    {
        return [
            'comment.updated.' . $this->comment['id'] => 'commentUpdated'
        ];
    }

    public function commentUpdated($commentId)
    {
        $this->comment['body'] = 'Updated';


    }

    public function render()
    {
        return view('livewire.comment-nest-item');
    }
}
