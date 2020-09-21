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
    public $naadus,$contact_no;
    public $page='show';
    public $places,$message;
    //
    public $value;
    protected $rules=[
        'name'=>'required|min:6',
    ];
    public function checkName()
    {
        $this->message='பெயர் சேர்க்கவும் ';        

    }
    public function newUser()
    {
        //$this->addError($this->name, 'message');
       $names=$this->name;
       if(empty($names)){
        $this->message='பயனாளர்  பெயர் 2';
        }
        $this->naadus = God::select('name', 'id')
        ->orderBy('name')                 
        ->get();
       $this->page='show';
    }
    public function render()
    {
        $this->message='';
        $this->gods=User::all();
        $this->name=$this->name;
        $this->remarks=$this->remarks;        
        $this->naadus = Naadu::select('name', 'id')
        ->orderBy('name')                 
        ->get();
        
        return view('admin.userregs.show');
    }

    public function createUser()
    { 
        $this->name='';
        $this->remarks='';
        $this->naadus = Place::select('name', 'id')
             ->orderBy('name')                 
             ->get();
        
        $this->page='show';
    }
    private function resetInputFields(){

        $this->name = '';        
    }   
    public function mount()
    {
         
        $this->resetInputFields();
    }
     
  
    public function editUser($id)
    {
        $this->page=('edit');    
      
    }
    public function updateUser()
    {
        $this->page='show';               
    }
  
   


}
