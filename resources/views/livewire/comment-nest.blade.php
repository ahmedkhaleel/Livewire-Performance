<div>
    @foreach($comments as $comment)
        <livewire:comment-nest-item :comment="$comment" :key="$comment['id']" />
    @endforeach
</div>
