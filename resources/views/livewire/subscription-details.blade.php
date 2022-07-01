<div wire:init="loadSubscriptionDetails">
    @if ($subscription)
        {{$subscription}}
    @else
        Loading .......
    @endif

</div>
