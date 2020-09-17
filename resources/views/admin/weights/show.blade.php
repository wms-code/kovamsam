<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')

                    <div class="card-header">
                         எடை  - புதியதாக  சேர்க்க 
                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                         <label for="name">எடை</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="எடை ">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createWeight" type="button" class="btn btn-block btn-primary waves-effect waves-classic">சேர்க்க</button>
                            </span>
                         
                         </div>
                    </div>

            @elseif ($page == 'edit')

                    <div class="card-header">
                          எடை மாற்ற           
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" readonly type="text"  class="form-control">
                         <label for="name">எடை  </label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" >
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateWeight" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                  
            @elseif($page == 'show')


                    <div class="card-header">
                        எடை   List
                        <span class="float-right">
                            <button wire:click="newWeight" class="btn btn-sm btn-success waves-effect waves-classic">New எடை  </button>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($weights)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>எடை  </th>
                                    <th>மாற்ற</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($weights as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                            
                                           

                                            <button  wire:click="editWeight({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No Weight created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>