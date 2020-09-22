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
    public $name, $sel_id,$gods,$msg,$remarks,$msg1;
    public $contact_no,$message;
    public $naadus,$naadumessage='',$naadu_id=0;
    public $page='show';
    public $places,$place_id;
    public $gender=2;
    public $savemessage='';
    //
    protected $listeners = ['postAdded'];


 
    public $value;
    protected $rules=[
        'name'=>'required|min:6',
        'contact_no'=>'required|max:10',
        'remarks'=>'nullable',
    ];

    public function checkNo()
    {
       // $this->name='s';
         
       $length=5;
       $this->naadumessage= substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
       

        $contact_nos=$this->contact_no;    
        $numlen=strlen($contact_nos);
        if(empty($contact_nos)){                   
            $this->message='தொடர்பு எண் - பதிவு செய்யவும் '; 
           // $this->addError($message, $error)	;  
            return; 
        }
        
        if (!is_numeric($contact_nos))
        {
            $this->message='தொடர்பு எண் - எண் மட்டும்  ';      
            return;
        }
      

        if(!($numlen==10)){                   
            $this->message='தொடர்பு எண் - சரியாக பதிவு  செய்யவும் ';      
            return; 
        }
        
        $result = DB::select('select contact_no from users where contact_no = :id', ['id'=>$contact_nos]);
            
        if(!empty($result))
 
            {
                    $this->message='தொடர்பு எண் - முன்பே பதிவு செய்யப்பட்டுள்ளது-புதிய எண்  செய்யவும்';
                    return; 
            } 
            $this->message='தொடர்பு எண் - பதிவு செய்யவும் ';      
            return;
    }

    public function newUser()
    {      
        

        $contact_nos=$this->contact_no;
        $naaduid=$this->naadu_id;        
        if ($naaduid==0)
        {
            $this->naadumessage='நாடு தேர்வு செய்யவும் ';      
            return; 
        }
        $this->naadumessage='';

        $numlen=strlen($contact_nos);
        if(empty($contact_nos)){                   
            $this->message='தொடர்பு எண் - பதிவு செய்யவும் ';      
            return; 
        }
        
        if (!is_numeric($contact_nos))
        {
            $this->message='தொடர்பு எண் - எண் மட்டும்  ';      
            return;
        }    

       if(!($numlen==10)){                   
            $this->message='தொடர்பு எண் - சரியாக பதிவு  செய்யவும் ';      
            return; 
        }
         
         
        
        if(($numlen==10))                  

        { 
            $this->message=''.$contact_nos;    
            $result = DB::select('select contact_no from users where contact_no = :id', ['id'=>$contact_nos]);
            if(!empty($result)) 
            {
                $this->message=''.$contact_nos;
            } 
            
             if(!empty($result))
               {
                    $this->message='தொடர்பு எண் - முன்பே பதிவு செய்யப்பட்டுள்ளது  -புதிய எண் பதிவு செய்யவும்';
                    return;
                // foreach ($users as $user) {
               //     echo $user->name;
               // } 
               }
            elseif(empty($result))
            {
                //$hashed_random_password = Hash::make(str_random(8)); use Illuminate\Support\Facades\Hash;
          
                 
                $length=4;
                $password= substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
             
                
                 User::create([
                'name' => $this->name,
                'contact_no' => $this->contact_no,
                'gender' => $this->gender,
                'naadu_id' => $this->naadu_id,
                'password' => $password,
                'remarks' => $this->remarks,
              ]);
              $this->savemessage='தொடர்பு எண்:-'. $this->contact_no.'- Password:-'.$password;
              
              $this->page='save';
              return;
            }  
            
        }  
       
 
    }
    public function render()
    { 
        $this->gods=User::all();
        $this->name=$this->name;        
        $this->savemessage=$this->savemessage;
        $this->naadumessage==$this->naadumessage;
        $this->gender=$this->gender; 
        $this->naadu_id=$this->naadu_id;
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
