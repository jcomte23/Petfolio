<?php

namespace App\Http\Livewire\Mascots;

use App\Models\Mascot;
use Livewire\Component;

class IndexMascot extends Component
{
    public $search='';

    public function render()
    {
        $mascots=Mascot::where('name','like',"%$this->search%")->paginate(10);
        return view('livewire.mascots.index-mascot',compact('mascots'));
    }
}
