<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentNestItemAction extends Component
{
    public $commentId;
    public function doSomething()
    {
        $this->emitup('comment.updated.'.$this->commentId, $this->commentId);
    }
    public function render()
    {
        return view('livewire.comment-nest-item-action');
    }
}
