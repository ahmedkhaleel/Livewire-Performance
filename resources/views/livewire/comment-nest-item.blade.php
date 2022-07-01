<div>
    ({{ $comment['body'] }}) ({{ $comment['id'] }}) {{now()}}

    <livewire:comment-nest-item-action :commentId="$comment['id']" />

    @if($comment['children'])
        <div class="border rounded shadow-xl bg-cyan-500 text-gray-50 pl-3.5">
        @foreach($comment['children'] as $child)
            <livewire:comment-nest-item :comment="$child" :key="$child['id']" />
        @endforeach
        </div>
    @endif
</div>
