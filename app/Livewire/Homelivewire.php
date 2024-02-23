<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
class Homelivewire extends Component
{
    public $rooms;
    public function render()
    {
        $this->rooms=room::all()->take(3);
        return view('livewire.homelivewire');
    }
}
