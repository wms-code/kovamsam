<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Education;

class Eudcations extends Component
{
     public $name,$sel_id,$msg; 
     public $page='show';
     public $educations;

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->educations=Education::all();
        return view('admin.educations.show');
    }

    public function newAge()
    {
        $this->resetInputFields();
        $this->msg='New';
        $this->page='add';
    }

    public function editEducation($id)
    {
        $this->msg='Edit';
        $record=Education::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }

    public function updateEducation()
    {
        $record=Education::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);

        $this->msg='Education Updated Successfully.';
        //$this->resetInputFields();
        $this->page='show';       
        
    }

    public function deleteEducation()
    {
        session()->flash('message', 'Education Updated Successfully.');
        $this->educations=Education::all();
        return view('admin.educations.show');        
    }


    public function createEducation()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
        
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);


        Education::create($validatedDate);

        session()->flash('message', 'Education Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
