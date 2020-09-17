<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Caste;

class Castes extends Component
{
    public $name, $sel_id,$castes,$msg;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }   
    public function render()
    {
        $this->castes=Caste::all();
        return view('admin.castes.show');
    }
    public function editCaste($id)
    {
        $this->msg='Edit';
        $record=Caste::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updateCaste()
    {
        $record=Caste::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='Caste Updated Successfully.';        
        $this->page='show';               
    }
    public function newCaste()
    {
        $this->resetInputFields();
        $this->page='add';
    }
    public function createCaste()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Caste::create($validatedDate);

        session()->flash('message', 'Caste Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
