


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')
                    <div class="card-header">
                        Add New Age                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text"  class="form-control">
                         <label for="name">Age List</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="Age Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createAge" type="button" class="btn btn-block btn-primary waves-effect waves-classic">Add Age</button>
                            </span>
                         
                         </div>
                    </div>

                @elseif ($page == 'edit')

                    <div class="card-header">
                        Edit  Age                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text"  class="form-control">
                         <label for="name">Age name</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" placeholder="Age Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateAge" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">Update Age</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')


                    <div class="card-header">
                        Age List
                        <span class="float-right">
                            <button wire:click="newAge" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    <div class="card-body">
                        <input wire:model.name="msg" type="text"  class="form-control">
                        @if ($ages)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ages as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">      
                                        
                               <button wire:click="editAge({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button>

            <button  type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                          </div>

                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                            
                        @else
                        <p>No Age created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>