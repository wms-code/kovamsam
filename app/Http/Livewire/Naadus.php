<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Naadu;

class Naadus extends Component
{
     public $name,$sel_id,$msg; 
     public $page='show';
     public $naadus;

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->naadus=Naadu::all();
        return view('admin.naadus.show');
    }

    public function newNaadu()
    {
        $this->resetInputFields();
        $this->msg='New';
        $this->page='add';
    }

    public function editNaadu($id)
    {
        $this->msg='Edit';
        $record=Naadu::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }

    public function updateNaadu()
    {
        $record=Naadu::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);

        $this->msg='Naadu Updated Successfully.';
        //$this->resetInputFields();
        $this->page='show';       
        
    }

    public function deleteNadau()
    {
        session()->flash('message', 'Naadu Updated Successfully.');
        $this->naadus=Naadu::all();
        return view('admin.naadus.show');        
    }


    public function createNaadu()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
        
        $this->validate([
            'name' => 'required|min:5' 
        ]);


        Naadu::create($validatedDate);

        session()->flash('message', 'Naadu Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
