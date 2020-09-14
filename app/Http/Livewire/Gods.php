<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\God;

class Gods extends Component
{
    public $name, $sel_id,$gods,$msg;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }   
    public function render()
    {
        $this->gods=God::all();
        return view('admin.gods.show');
    }
    public function editPlace($id)
    {
        $this->msg='Edit';
        $record=God::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updatePlace()
    {
        $record=God::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='God Updated Successfully.';        
        $this->page='show';               
    }
    public function newPlace()
    {
        $this->resetInputFields();
        $this->page='add';
    }
    public function createPlace()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        God::create($validatedDate);

        session()->flash('message', 'God Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
