<?php

namespace App\Livewire;

use Livewire\Component;

class Roomsingleshow extends Component
{

    public $totalprice;
    public $day;
    public $start;
    public $end;
    public $room;
    public function order()
    {

    }

    public function mount($room)
    {
        $this->room=$room;
       
    }
    
    public function render()
    {

        return view('livewire.roomsingleshow');
    }
}
