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
        if($this->start<$this->end )
        {
        $datetime1 = new DateTime($this->start);
        $datetime2 = new DateTime($this->end);
        $interval = $datetime1->diff($datetime2);
        $this->day = $interval->format('%a');
        $this->totalprice=$this->room->price*$this->day;
        $this->key=1;
        Session()->flash('msg', 'فاکتور ساخته شد'); 
        }
        else
        {
            $this->totalprice="";
            $this->day="";
            $this->end="";
            $this->start="";
            Session()->flash('msg', 'تاریخ ورودی صحت ندارند');

        }
    
    }

    public function pay()
    {
        if($this->start<$this->end && $this->day>0)
        {
        booking::Create([
            'user_id'=>auth()->user()->id,
            'room_id'=>$this->room->id,
           'start'=>$this->start,
           'end'=>$this->end,
            'totalprice'=>$this->totalprice,
            'status'=>'waitting',
            'day'=>$this->day]);
            $this->totalprice="";
            $this->day="";
            $this->end="";
            $this->start="";
        $this->key=-1;
        Session()->flash('msg', 'پرداخت  شد!');
        }
        else
        {
            Session()->flash('msg', 'تاریخ ورودی صحت ندارند');
        }
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
