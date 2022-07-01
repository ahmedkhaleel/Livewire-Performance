<?php

namespace App\Http\Livewire;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SubscriptionDetails extends Component
{
    public $readyToLoadSubscriptionDetails = false;
    public function loadSubscriptionDetails()
    {
        $this->readyToLoadSubscriptionDetails = true;

    }
    public function render()
    {
        return view('livewire.subscription-details',
        [
            'subscription'=> $this->readyToLoadSubscriptionDetails
            ? Route::dispatch(Request::create('/api/subscription', 'GET'))
                : null
        ]
        );
    }
}
