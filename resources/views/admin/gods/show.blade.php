<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')                   
                    <div class="card-header">
                        கடவுள்- புதியதாக  சேர்க்க                     
                    </div>
                     
          
                    <div class="card-body">
                         <div class="form-group">    
                             <label for="name">கடவுள் பெயர் </label>
                             <input wire:model.defer="name" type="text" class="form-control"  placeholder="கடவுள்">
                              @error ('name') <span class='error'> {{ $message }}</span> @enderror
                              @if ($errors->has('name')) <p class="error">{{ $errors->first('name') }}</p> @endif
                             
                        </div>
                         <div  class="form-group">   
                            <label for="place_id">இடம் </label>                 
                              <select  id="place_id"   class="form-control" wire:model="place_id">
                                <option value="0">---Select இடம்--</option>
                                 @foreach ($places as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>                                  
                                 @endforeach 
                              </select>                            
                             
                         </div>

                         <div class="form-group">   
                            <label for="naadu_id">நாடு</label>
                              <select  id="naadu_id" name="naadu_id" class="form-control" wire:model="naadu_id">
                                  <option value="0">---Select நாடு--</option>
                                 @foreach ($naadu as $item)
                                   <option value="{{ $item->id}}">{{$item->name}}</option> 
                                 @endforeach    
                                </select>                             
                         </div>

                         <div class="form-group">    
                            <label for="remarks">குறிப்பு </label>
                            <input wire:model.defer="remarks" type="text" class="form-control" placeholder="குறிப்பு ">
                        </div>

                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createGod" type="button" class="btn btn-block btn-primary waves-effect waves-classic">சேர்க்க</button>
                            </span>                         
                         </div>
                    </div>


                @elseif ($page == 'edit')

                    <div class="card-header">
                        Edit  கடவுள்                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text" readonly  class="form-control">
                         <label for="name">கடவுள் பெயர்</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control">
                         </div>

                         <div  class="form-group">   
                            <label for="place_id">இடம்</label>                 
                              <select  id="place_id"   class="form-control" wire:model="place_id">
                                <option value="0">---Select இடம்--</option>
                                 @foreach ($places as $item)
                                   <option value="{{$item->id}}" 
                                    {{ $place_id == $item->id ? 'selected="selected"' : '' }}
                                    >{{$item->name}}</option>                                  
                                 @endforeach 
                              </select>                            
                             
                         </div>

                         <div class="form-group">   
                            <label for="naadu_id">நாடு</label>
                              <select  id="naadu_id" name="naadu_id" class="form-control" wire:model="naadu_id">
                                  <option value="0">---Select நாடு--</option>
                                 @foreach ($naadu as $item)
                                   <option value="{{ $item->id}}"
                                    {{ $naadu_id == $item->id ? 'selected="selected"' : '' }}
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
                                <button wire:click="updateGod" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')

                    
                    
                    <div class="card-header">
                        God List
                        <span class="float-right">
                               <button wire:click="newGod" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    
                    <div class="card-body">
                        <input wire:model.name="msg1" type="text" readonly   class="form-control">
                        <input wire:model.name="msg" type="text"  readonly class="form-control">
                        @if ($gods)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gods as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                          
                                            <button wire:click="editGod({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No God created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>  

 
@push('scripts')
@endpush
