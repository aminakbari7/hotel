<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
class Roomlivewire extends Component
{

    public $rooms;
    public function render()
    {
        $this->rooms=room::all();

        return view('livewire.roomlivewire');
    }
}
