<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Age;

class Ages extends Component
{
     public $name,$sel_id; 
     public $page='show';
     public $ages;

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->ages=Age::all();
        return view('admin.ages.show');
    }

    public function newAge()
    {
        $this->page='add';
    }

    public function editAge($id)
    {
        $record=Age::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }

    public function updateAge()
    {
        $record=Age::find($sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        
        return view('admin.ages.show');
        
    }

    public function deleteAge()
    {
        session()->flash('message', 'Age Updated Successfully.');

        $this->ages=Age::all();
        return view('admin.ages.show');
        
    }


    public function createAge()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Age::create($validatedDate);

        session()->flash('message', 'Age Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
