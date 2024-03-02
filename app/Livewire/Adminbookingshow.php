<?php

namespace App\Livewire;
use App\Models\booking;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Adminbookingshow extends Component
{
    public $bookings;
    public $keybooking=-1,$ubooking=-1;
    public $newstatus="";


    public function edit($id)
    {
        $this->ubooking=$id;
        $this->keybooking=1;
    }
 
    public function update()
    {
        if($this->newstatus)
        {

            $temp=booking::find($this->ubooking);
            $temp->status=$this->newstatus;
            $temp->save();
            $this->ubooking=-1;
            $this->keybooking=-1;
            $this->newstatus="";
        }
        $this->mount();
        $this->dispatch('listcheck');
    }
    public function mount()
    {
        $this->bookings=booking::all();
    }
    public function render()
    {
        return view('livewire.adminbookingshow');
    }
}
