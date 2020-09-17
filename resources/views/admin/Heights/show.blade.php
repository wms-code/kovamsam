


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')

                    <div class="card-header">
                        உயரம்  - புதியதாக  சேர்க்க 
                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                         <label for="name">உயரம்</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="உயரம்">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createHeight" type="button" class="btn btn-block btn-primary waves-effect waves-classic">சேர்க்க</button>
                            </span>
                         
                         </div>
                    </div>

            @elseif ($page == 'edit')

                    <div class="card-header">
                          உயரம் மாற்ற           
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" readonly type="text"  class="form-control">
                         <label for="name">உயரம்</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" >
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateHeight" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                  
            @elseif($page == 'show')


                    <div class="card-header">
                        உயரம் List
                        <span class="float-right">
                            <button wire:click="newHeight" class="btn btn-sm btn-success waves-effect waves-classic">New உயரம்</button>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($heights)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>உயரம்</th>
                                    <th>மாற்ற</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($heights as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                            
                                           

                                            <button  wire:click="editHeight({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>

                                            <button type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                          </div>

                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                            
                        @else
                        <p>No Height created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>