<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $hidden;

    public function mount($hidden){
        $this->hidden = $hidden;
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
