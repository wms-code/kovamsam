<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\God;
use App\Place;
use App\Naadu;

class Gods extends Component
{
    public $name, $sel_id,$gods,$msg,$place_id,$naadu_id,$remarks,$msg1;
    public $page='show';
    public $places;public $naadu;
    //
    public $value;
     
    //
    private function resetInputFields(){

        $this->name = '';
        
    }   
    public function mount()
    {
         
        $this->resetInputFields();
    }
     
    public function render()
    {
        $this->gods=God::all();
        return view('admin.gods.show');
    }
    public function editGod($id)
    {
        $this->msg='Edit';
        $record=God::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updateGod()
    {
        $record=God::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='God Updated Successfully.';        
        $this->page='show';               
    }
    public function newGod()
    {
        $this->resetInputFields();
        $this->places = Place::select('name', 'id')
                ->orderBy('name')                 
                ->get();

        $this->naadu = Naadu::select('name', 'id')
                ->orderBy('name')                 
                ->get();        
       
        $this->msg='New';
        $this->page='add';
    }
    public function createGod()
    {
        
        $this->msg1=$this->place_id.''.$this->name;
        session()->flash('message', 'God Created Successfully.');
       // $validatedData = $this->validate([
          //  'name' => 'required',
       // ]);

        //God::create($validatedData);

       // session()->flash('message', 'God Created Successfully.');

        //this->resetInputFields();

        $this->page='show';
    }


}
