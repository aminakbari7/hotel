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
    public function destroyroom($id)
    {
       room::destroy($id);
      $this->rooms=room::all();
      return view('livewire.adminroom');
    }
    public function editroom($id)
    {
       $temp=room::find($id);
       if($this->newsize!=null)
       $temp->size=$this->newsize;
       if($this->newprice!=null)
       $temp->price=$this->newprice;
       if($this->newchild!=null)
       $temp->child=$this->newchild;
       if($this->newdescription!=null)
       $temp->description=$this->newdescription;
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
