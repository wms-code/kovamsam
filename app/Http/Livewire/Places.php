<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Place;

class Places extends Component
{
    public $name, $sel_id,$places,$msg;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }   
    public function render()
    {
        $this->places=Place::all();
        return view('admin.places.show');
    }
    public function editPlace($id)
    {
        $this->msg='Edit';
        $record=Place::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updatePlace()
    {
        $record=Place::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='Place Updated Successfully.';        
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

        Place::create($validatedDate);

        session()->flash('message', 'Place Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
