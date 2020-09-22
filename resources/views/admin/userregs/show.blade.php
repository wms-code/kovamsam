

<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'save')                   
                    <div class="card-header">
                      <label  style='color: red' for="name">{{ $savemessage }}</label> 
                      பயனாளர்- புதிய சேர்க்கை முடிந்தது      

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
                      <label for="name">பயனாளர்  பெயர்</label> 
                      <input name="name" type="text" class="form-control" wire:model.defer="name" required maxlength="50">                                 
                    </div> 

                    <div class="form-group">
                        <label for="contact_no">தொடர்பு எண்</label>
                        <input  name="contact_no"
                         type="number" class="form-control" 
                         min="1" wire.focusout="checkNo"
                         wire:model.defer="contact_no"  pattern="[0-9]{10}"
                         size=10 minlength="10" required maxlength="10"/>
                        <label style='color: red' >{{ $message }}</label>      
                        @if ($errors->has('contact_no')) <p class="error">{{ $errors->first('contact_no') }}</p> @endif
                                    
                    </div>

                    <div class="form-group">  
                          <label for="name">பாலினம்</label><br>
                          <input type="radio" id="male" name="gender" @if ($gender ===1)  echo checked;   @endif
                           wire:model.defer="gender"  value="1">
                          <label for="male">ஆண்</label> 
                          <input type="radio" id="female" name="gender" @if ($gender ===2)  echo checked;   @endif wire:model.defer="gender" value="2">
                          <label for="female">பெண்</label><br>      
                    </div>
              

                    <div  class="form-group">   
                       <label for="naadu_id">நாடு</label>                 
                       <select  id="naadu_id" required  class="form-control" wire:model.defer="naadu_id">
                         <option value="0">-- நாடு தேர்வு செய்யவும் --</option>
                          @foreach ($naadus as $item)
                            <option value="{{$item->id}}"
                              @if ($naadu_id ===$item->id)  echo selected   @endif
                              >{{$item->name}}</option>                                  
                          @endforeach 
                      </select>  
                      <label style='color: red' >{{ $naadumessage }}</label>     
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

 
