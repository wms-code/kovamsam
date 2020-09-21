<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')                   
                    <div class="card-header">
                        உட்பிரிவு- புதியதாக  சேர்க்க                     
                    </div>
                     
          
                    <div class="card-body">
                         <div class="form-group">    
                             <label for="name">உட்பிரிவு பெயர் </label>
                             <input wire:model.defer="name" type="text" class="form-control"  placeholder="உட்பிரிவு">
                              @error ('name') <span class='error'> {{ $message }}</span> @enderror
                              @if ($errors->has('name')) <p class="error">{{ $errors->first('name') }}</p> @endif
                             
                        </div>
                        <div  class="form-group">   
                            <label for="caste_id">Caste</label>                 
                              <select  id="caste_id"   class="form-control" wire:model="caste_id">
                                <option value="0">---Select Caste--</option>
                                 @foreach ($castes as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>                                  
                                 @endforeach 
                              </select>     
                         </div>
 

                         <div class="form-group">    
                            <label for="remarks">குறிப்பு </label>
                            <input wire:model.defer="remarks" type="text" class="form-control" placeholder="குறிப்பு ">
                        </div>

                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createSubcaste" type="button" class="btn btn-block btn-primary waves-effect waves-classic">சேர்க்க</button>
                            </span>                         
                         </div>
                    </div>


                @elseif ($page == 'edit')

                    <div class="card-header">
                        Edit  உட்பிரிவு                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text" readonly  class="form-control">
                         <label for="name">உட்பிரிவு பெயர்</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control">
                         </div>

                         <div  class="form-group">   
                            <label for="caste_id">Caste</label>                 
                              <select  id="caste_id"   class="form-control" wire:model="caste_id">
                                <option value="0">---Select Sub Caste--</option>
                                 @foreach ($castes as $item)
                                   <option value="{{$item->id}}" 
                                    {{ $caste_id == $item->id ? 'selected="selected"' : '' }}
                                    >{{$item->name}}</option>                                  
                                 @endforeach 
                              </select>                            
                             
                         </div>

                          

                         <div class="form-group">    
                            <label for="remarks">குறிப்பு</label>
                            <input wire:model.defer="remarks" type="text" class="form-control" >
                        </div>


                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateSubcaste" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')

                    
                    
                    <div class="card-header">
                        உட்பிரிவு List
                        <span class="float-right">
                               <button wire:click="newSubcaste" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    
                    <div class="card-body">
                        <input wire:model.name="msg1"   type="text" readonly   class="form-control">
                        <input wire:model.name="msg" type="text"  readonly class="form-control">
                        @if ($subcastes)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subcastes as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                          
                                            <button wire:click="editSubcaste({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button> 
                                            <button  type="button"
                                                 class="btn btn-floating btn-primary btn-xs waves-effect waves-classic select2">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                          </div>

                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                            
                        @else
                        <p>No Sub Caste created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>  

 
@push('scripts')
@endpush
