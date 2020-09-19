<?php
namespace App\Http\Livewire;
use Illuminate\Validation\Rule; 


use Illuminate\Http\Request;
use App\Http\Requests;
use Livewire\Component;
use App\User;
use App\God;
use App\Place;
use App\Naadu;
use Validator;


class Userregs extends Component
{
    public $name, $sel_id,$gods,$msg,$place_id,$naadu_id,$remarks,$msg1;
    public $page='show';
    public $places;public $naadu;
    //
    public $value;
    protected $rules=[
        'name'=>'required|min:6',
    ];
     
    private function resetInputFields(){

        $this->name = '';
        
    }   
    public function mount()
    {
         
        $this->resetInputFields();
    }
     
    public function render()
    {
        $this->gods=User::all();
        return view('admin.userregs.show');
    }
    public function editUser($id)
    {
        $this->page=('edit');    
      
    }
    public function updateUser()
    {
        $this->page='show';               
    }
    public function newUser()
    {
        $this->page='add';
    }
     public function createUser()
    { 
        
        $this->page='show';
    }


}
