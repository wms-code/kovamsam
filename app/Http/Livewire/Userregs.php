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
use DB;
 

class Userregs extends Component
{
    public $name, $sel_id,$gods,$msg,$place_id,$naadu_id,$remarks,$msg1;
    public $naadus,$contact_no;
    public $page='show';
    public $places,$message;
    public $gender=0;
    //
 
    public $value;
    protected $rules=[
        'name'=>'required|min:6',
        'contact_no'=>'required|max:10',
        'remarks'=>'nullable',
    ];
    public function checkName()
    {
        $this->message='பெயர் சேர்க்கவும் ';        

    }
    public function newUser()
    {      
         
        $contact_nos=$this->contact_no;
        if(empty($contact_nos)){                   
            $this->message='Contact Nos Empty '.$contact_nos;      
            return; 
        }
        
        else
        {
  
            $this->message=''.$contact_nos;    
            $result = DB::select('select contact_no from users where contact_no = :id', ['id'=>$contact_nos]);
            
            if (!$result) 
               {
                    $this->message='Contact No Avail!!!';  
                     

                // foreach ($users as $user) {
               //     echo $user->name;
               // }
            
            }  
            $this->validate();
            User::create([
                'name' => $this->name,
                'contact_no' => $this->contact_no,
                'gender' => $this->gender,
                'naadu_id' => $this->naadu_id,
                'remarks' => $this->remarks,
            ]);

        }
 
         
        
        return;

      
    }
    public function render()
    { 
        $this->gods=User::all();
        $this->name=$this->name;
        $this->gender=$this->gender; 
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
