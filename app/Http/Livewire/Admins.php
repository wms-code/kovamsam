<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Admin;

class Admins extends Component
{
 
    public $admins, $name, $email, $user_id;
    public $updateMode = false;

    public function render()
    {
        $this->admins = Admin::all();
        return view('livewire.admins');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Admin::create($validatedDate);

        session()->flash('message', 'Admins Created Successfully.');

        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = Admin::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = Admin::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Admins Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Admin::where('id',$id)->delete();
            session()->flash('message', 'Admins Deleted Successfully.');
        }
    }

}
