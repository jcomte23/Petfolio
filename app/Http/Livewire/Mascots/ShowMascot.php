<?php

namespace App\Http\Livewire\Mascots;

use App\Models\Mascot;
use Livewire\Component;

class ShowMascot extends Component
{
    public Mascot $mascot;

    public function render()
    {
        return view('livewire.mascots.show-mascot');
    }
}
