


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')

                    <div class="card-header">
                         பதவி-வேலை s - புதியதாக  சேர்க்க 
                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                         <label for="name">பதவி-வேலை </label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="பதவி-வேலை ">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createWork" type="button" class="btn btn-block btn-primary waves-effect waves-classic">சேர்க்க</button>
                            </span>
                         
                         </div>
                    </div>

            @elseif ($page == 'edit')

                    <div class="card-header">
                          பதவி-வேலை  மாற்ற           
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" readonly type="text"  class="form-control">
                         <label for="name">பதவி-வேலை </label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" >
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateWork" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                  
            @elseif($page == 'show')


                    <div class="card-header">
                        பதவி-வேலை  List
                        <span class="float-right">
                            <button wire:click="newWork" class="btn btn-sm btn-success waves-effect waves-classic">New பதவி-வேலை </button>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($works)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>பதவி-வேலை </th>
                                    <th>மாற்ற</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($works as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                            
                                           

                                            <button  wire:click="editWork({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No Work created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>