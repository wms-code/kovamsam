<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Work;

class Works extends Component
{
     public $name,$sel_id,$msg; 
     public $page='show';
     public $works;

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->works=Work::all();
        return view('admin.works.show');
    }

    public function newWork()
    {
        $this->resetInputFields();
        $this->msg='New';
        $this->page='add';
    }

    public function editWork($id)
    {
        $this->msg='Edit';
        $record=Work::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }

    public function updateWork()
    {
        $record=Work::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);

        $this->msg='Work Updated Successfully.';
        //$this->resetInputFields();
        $this->page='show';       
        
    }

    public function deleteWork()
    {
        session()->flash('message', 'Work Updated Successfully.');
        $this->works=Work::all();
        return view('admin.works.show');        
    }


    public function createWork()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
        
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);


        Work::create($validatedDate);

        session()->flash('message', 'Work Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
