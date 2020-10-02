<?php
namespace App\Http\Livewire;
use Illuminate\Validation\Rule; 


use Illuminate\Http\Request;
use App\Http\Requests;
use Livewire\Component;
use App\God;
use App\Place;
use App\Naadu;
use Validator;


class Gods extends Component
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
        $this->gods=God::all();
        return view('admin.gods.show');
    }
    public function editGod($id)
    {
        $this->msg='Edit';
        $record=God::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->place_id=$record->place_id;
        $this->naadu_id=$record->naadu_id;
        $this->remarks=$record->remarks;
        $this->places = Place::select('name', 'id')
                ->orderBy('name')                 
                ->get();

        $this->naadu = Naadu::select('name', 'id')
                ->orderBy('name')                 
                ->get();
        $this->page=('edit');    
      
    }
    public function updateGod()
    {
        $record=God::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            'place_id'=>$this->place_id,            
            'naadu_id'=>$this->naadu_id,
            'remarks'=>$this->remarks,           
            ]);
        $this->msg='God Updated Successfully.';        
        $this->page='show';               
    }
    public function newGod()
    {
        $this->resetInputFields();
        $this->places = Place::select('name', 'id')
                ->orderBy('name')                 
                ->get();

        $this->naadu = Naadu::select('name', 'id')
                ->orderBy('name')                 
                ->get();        
       
        $this->msg='New';
        $this->page='add';
    }
     public function createGod()
    { 
        
        $this->msg1=$this->place_id.'-'.$this->name.'-'.$this->naadu_id;
        $savetrue=0;
         
         
        $validatedData=['name'=>$this->name,
                         'place_id'=>$this->place_id,
                         'naadu_id'=>$this->naadu_id,
                         'remarks'=>$this->remarks,                        
                        ];
        
        $savetrue=God::insertGetId($validatedData);
        if ($savetrue>0)
        {
            $this->msg1=$savetrue.'-'."Data Saved Succesfully!!!";
        }
        else
        {
            $this->msg1="Unable to Save!!!";

        }
 

        $this->resetInputFields();

        $this->page='show';
    }


}
