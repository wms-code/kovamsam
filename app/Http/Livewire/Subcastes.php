<?php
namespace App\Http\Livewire;
use Illuminate\Validation\Rule; 


use Illuminate\Http\Request;
use App\Http\Requests;
use Livewire\Component;
use App\Subcaste;
use App\Caste;

use Validator;


class Subcastes extends Component
{
    public $name, $sel_id,$subcastes,$msg,$caste_id,$remarks,$msg1;
    public $page='show';
    public $castes; 
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
        $this->subcastes=Subcaste::all();
        return view('admin.subcastes.show');
    }
    public function editSubcaste($id)
    {
        $this->msg='Edit';
        $record=Subcaste::find($id);
        $this->name=$record->name;
        $this->sel_id=$record->id;
        $this->caste_id=$record->caste_id;        
        $this->remarks=$record->remarks;
        $this->castes = Caste::select('name', 'id')
                ->orderBy('name')                 
                ->get();

         
        $this->page=('edit');    
      
    }
    public function updateSubcaste()
    {
        $record=Subcaste::find($this->sel_id);
        $record->update([
            'name'=>$this->name,
            'caste_id'=>$this->caste_id,            
            'remarks'=>$this->remarks,           
            ]);
        $this->msg='Subcaste Updated Successfully.';        
        $this->page='show';               
    }
    public function newSubcaste()
    {
        $this->resetInputFields();
        $this->castes = Caste::select('name', 'id')
                ->orderBy('name')                 
                ->get();

       
        $this->msg='New';
        $this->page='add';
    }
     public function createSubcaste()
    { 
           
        $savetrue=0;        
        
        $validatedData=['name'=>$this->name,
                         'caste_id'=>$this->caste_id, 
                         'remarks'=>$this->remarks,                        
                        ];
        
        $savetrue=Subcaste::insertGetId($validatedData);
        if ($savetrue>0)
        {
            $this->msg1=$savetrue.'-'."Data Saved Succesfully!!!";
        }
        else
        {
            $this->msg1="Unable to Save!!!";

        }

       // $validatedData = $this->validate([
          //  'name' => 'required',
       // ]);

        //Subcaste::create($validatedData);

       // session()->flash('message', 'Subcaste Created Successfully.');

        $this->resetInputFields();

        $this->page='show';
    }


}
