<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Weight;

class Weights extends Component
{
     public $name,$sel_id,$msg; 
     public $page='show';
     public $weights;

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->weights=Weight::all();
        return view('admin.weights.show');
    }

    public function newWeight()
    {
        $this->resetInputFields();
        $this->msg='New';
        $this->page='add';
    }

    public function editWeight($id)
    {
        $this->msg='Edit';
        $record=Weight::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }

    public function updateWeight()
    {
        $record=Weight::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);

        $this->msg='Weight Updated Successfully.';
        //$this->resetInputFields();
        $this->page='show';       
        
    }

    public function deleteWeight()
    {
        session()->flash('message', 'Weight Updated Successfully.');
        $this->weights=Weight::all();
        return view('admin.weights.show');        
    }


    public function createWeight()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
        
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);


        Weight::create($validatedDate);

        session()->flash('message', 'Weight Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
