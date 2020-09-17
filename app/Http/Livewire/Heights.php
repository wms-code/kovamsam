<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Height;

class Heights extends Component
{
    public $name, $sel_id,$heights,$msg;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }   
    public function render()
    {
        $this->heights=Height::all();
        return view('admin.heights.show');
    }
    public function editHeight($id)
    {
        $this->msg='Edit';
        $record=Height::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updateHeight()
    {
        $record=Height::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='Height Updated Successfully.';        
        $this->page='show';               
    }
    public function newHeight()
    {
        $this->resetInputFields();
        $this->page='add';
    }
    public function createHeight()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Height::create($validatedDate);

        session()->flash('message', 'Height Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
