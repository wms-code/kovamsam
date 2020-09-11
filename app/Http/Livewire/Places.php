<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Place;

class Places extends Component
{
    public $name, $places;
    public $page='show';

    private function resetInputFields(){
        $this->name = '';
    }
   
    public function render()
    {
        $this->places=Place::all();
        return view('admin.places.show');
    }



    public function newPlace()
    {
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
