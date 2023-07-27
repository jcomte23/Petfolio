<?php

namespace App\Http\Livewire\Mascots;

use App\Models\Mascot;
use Livewire\Component;

class IndexMascot extends Component
{
    public function render()
    {
        $mascots=Mascot::paginate(50);
        return view('livewire.mascots.index-mascot',compact('mascots'));
    }
}
