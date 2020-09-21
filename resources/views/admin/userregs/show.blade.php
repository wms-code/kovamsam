

<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'save')                   
                    <div class="card-header">
                        கடவுள்- புதியதாக  சேர்க்க                     
                    </div> 
                    
            @elseif($page == 'show')
            <div class="card-header">
                பயனாளர் -  புதியதாக சேர்க்க                 
            </div>
               <form wire:submit.prevent="newUser">
                  <div class="card-header">
                    பயனாளர் - மணமகள் /மணமகன் 
                   <div class="card-body">
                     
                    <div class="form-group">
                      <label for="name">பயனாளர்  பெயர் *</label>

                      <input wire:keydown.Tab="checkName"  
                             name="name" type="text" class="form-control" wire:model.defer="name" maxlength="50">  
                      <label  style='color: red' for="name">{{ $message }}</label>
                       @error ('name') <span    style='color: red'> {{ $message }}</span> @enderror                     
                    </div>
     
                    <div class="form-group">
                        <label for="name">தொடர்பு எண்</label>
                        <input name="contact_no" type="text" class="form-control" wire:model="contact_no" maxlength="10">                       
                    </div>
              

                    <div  class="form-group">   
                       <label for="naadu_id">நாடு</label>                 
                       <select  id="naadu_id"  class="form-control" wire:model="naadu_id">
                         <option value="0">-- நாடு தேர்வு செய்யவும் --</option>
                          @foreach ($naadus as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>                                  
                          @endforeach 
                      </select>     
                    </div> 

                    <div class="form-group">    
                      <label for="remarks">குறிப்பு</label>
                      <input wire:model="remarks" name="remarks" type="text" class="form-control" placeholder="குறிப்பு ">
                    </div> 

                    <span class="float-right">
                      <button wire:click="newUser" class="btn btn-sm btn-success waves-effect waves-classic">புதியதாக சேர்க்கவும் </button>
                     </span>
                 </div>
               </form>  
            </div>
               
           </div>
                   
                     
            @endif
        </div>
    </div>
</div>  

 
@push('scripts')
@endpush
