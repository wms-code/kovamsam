<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Age;

class Ages extends Component
{
    public $name, $ages;
    public $page='show';

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
