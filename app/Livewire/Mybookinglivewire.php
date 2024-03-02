<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\booking;
use Livewire\Attributes\On;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
class Mybookinglivewire extends Component
{
    public $size=0;
    public $booking;
   
    #[On('listcheck')]
    public function updatelist()
    {
        $this->booking=booking::select()->where('user_id', auth()->user()->id)->get();
        $this->size=$this->booking->count();
        return view('livewire.mybookinglivewire');
    }
   
    public function render()
    {
        $this->booking=booking::select()->where('user_id', auth()->user()->id)->get();
        $this->size=$this->booking->count();
        return view('livewire.mybookinglivewire');
    }
}
