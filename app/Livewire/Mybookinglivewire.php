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
    public function deletebooking($id)
    {
        $temp=booking::find($id);
        $temp->isactive=0;
        $temp->save();
        $this->mount();
        $this->render();
    }

    #[On('bookingchange')]
    public function mount()
    {
        $this->booking=booking::select()->where('user_id', auth()->user()->id)->where('isactive','1')->get();
        $this->size=$this->booking->count();
    }
    public function render()
    {
        return view('livewire.mybookinglivewire');
    }
}
