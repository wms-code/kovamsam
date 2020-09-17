<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Income;

class Incomes extends Component
{
    public $name, $sel_id,$incomes,$msg;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }   
    public function render()
    {
        $this->incomes=Income::all();
        return view('admin.incomes.show');
    }
    public function editIncome($id)
    {
        $this->msg='Edit';
        $record=Income::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->page=('edit');    
      
    }
    public function updateIncome()
    {
        $record=Income::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            ]);
        $this->msg='Income Updated Successfully.';        
        $this->page='show';               
    }
    public function newIncome()
    {
        $this->resetInputFields();
        $this->page='add';
    }
    public function createIncome()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Income::create($validatedDate);

        session()->flash('message', 'Income Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
