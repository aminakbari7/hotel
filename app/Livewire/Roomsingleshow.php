<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\booking;
use DateTime;
use Illuminate\Support\Facades\Session;
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
        Session()->flash('msg', 'فلکتور ساخته شد'); 

    }

    public function pay()
    {
        booking::Create([
            'user_id'=>auth()->user()->id,
            'room_id'=>$this->room->id,
           'start'=>$this->start,
           'end'=>$this->end,
            'totalprice'=>$this->totalprice,
            'day'=>$this->day]);
            $this->totalprice="";
            $this->day="";
            $this->end="";
            $this->start="";
        $this->key=-1;
        Session()->flash('msg', 'پرداخت  شد!');
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
