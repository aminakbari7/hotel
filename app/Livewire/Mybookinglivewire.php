<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\booking;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
class Mybookinglivewire extends Component
{
    public $size=0;
    public function render()
    {
        $booking=booking::select()->where('user_id', auth()->user()->id)->get();
        $this->size=$booking->count();
        return view('livewire.mybookinglivewire',['booking'=> $booking]);
    }
}
