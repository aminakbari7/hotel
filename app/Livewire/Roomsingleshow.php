<?php

namespace App\Livewire;

use Livewire\Component;
use DateTime;
class Roomsingleshow extends Component
{

    public $totalprice;
    public $day;
    public $start;
    public $end;
    public $room;
    public $key=-1;
    public function save()
    {
        $datetime1 = new DateTime($this->start);
        $datetime2 = new DateTime($this->end);
        $interval = $datetime1->diff($datetime2);
        $this->day = $interval->format('%a');
        $this->totalprice=$this->room->price*$this->day;
        $this->key=1;
    }

    public function pay()
    {
        $this->key=-1;
    }
    public function back()
    {
        $this->key=-1;
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
