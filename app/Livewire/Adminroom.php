<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class Adminroom extends Component
{
    use WithFileUploads;
    public $rooms;
    public $newimage ;
    public $newprice ;
    public $newsize ;
    public $newdescription ;
    public $newchild ;
    public $uroom=-1;
    public $keyroom=-1;
    public function updateroom($id)
    {
        $this->uroom=$id;
        $this->keyroom=1;
        $this->rooms=room::all();
        return view('livewire.adminroom');
    }
    public function editroom($id)
    {
       $temp=room::find($id);
       $temp->size=$this->newsize;
       $temp->price=$this->newprice;
       $temp->save();
       $this->uroom=-1;
        $this->keyroom=-1;
        $this->rooms=room::all();
        return view('livewire.adminroom');

    }
    public function cancelroom()
    {
        $this->uroom=-1;
        $this->keyroom=-1;
        $this->rooms=room::all();
        return view('livewire.adminroom');
       
    }
    public function render()
    {
        $this->rooms=room::all();
        return view('livewire.adminroom');
    }
}
