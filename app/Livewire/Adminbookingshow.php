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
    public function mount()
    {
        $this->bookings=booking::all();
    }
    public function render()
    {
        return view('livewire.adminbookingshow');
    }
}
