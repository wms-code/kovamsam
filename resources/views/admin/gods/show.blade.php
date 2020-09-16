 
@section('stylesheet')
@livewireStyles


<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />


@endsection


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
                             <input wire:model.defer="name" type="text" class="form-control" placeholder="கடவுள்">
                        </div>

                        <div class="form-group">   
                            <label for="place_id">இடம் </label>

                              <select  id="place_id"  wire:model="place_id" class="form-control">
                                 @foreach ($places as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>                                  
                                 @endforeach 
                              </select>
                              
                             
                         </div>

                         <div wire:ignore class="form-group">   
                            <label for="naadu_id">நாடு</label>
                              <select  wire:model="naadu_id"    id="naadu_id" name="naadu_id" class="form-control js-example-basic-single">
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
                        Edit  God                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text"  class="form-control">
                         <label for="name">God name</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" placeholder="God Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateGod" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">Update God</button>
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
                        <input wire:model.name="msg1" type="text"   class="form-control">
                        <input wire:model.name="msg" type="text"  class="form-control">
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


 