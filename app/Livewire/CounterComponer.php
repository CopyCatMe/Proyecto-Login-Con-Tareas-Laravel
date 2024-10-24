<?php

namespace App\Livewire;

use Livewire\Component;

class CounterComponer extends Component
{

    public $count = 0;

    public function render()
    {
        return view('livewire.counter-componer');
    }

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        $this->count--;
    }

}
