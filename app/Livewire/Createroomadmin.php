<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\room;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class Createroomadmin extends Component
{
    use WithFileUploads;
    public $image ;
    public $price ;
    public $size ;
    public $description ;
    public $child ;

    public function save()
    {
        $namei = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('images', $namei,'public');
        room::Create([
        'description'=>$this->description,
       'image'=>$namei,
        'price'=>$this->price,
        'child'=>$this->child,
        'size'=>$this->size]);
        Session()->flash('msg', 'اضافه شد!'); 
        $this->description="";
        $this->price="";
        $this->child="";
        $this->size="";
        $this->image="";
        $this->render();
    }
    public function render()
    {
        return view('livewire.createroomadmin');
    }
}
