<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]

class Home extends Component
{

    public $hidden = 'hidden';

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.home');
    }
}
