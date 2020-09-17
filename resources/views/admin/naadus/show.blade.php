


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')
                    <div class="card-header">
                        நாடு -புதியதாக  சேர்க்க                  
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg"  readonly type="text"  class="form-control">
                         <label for="name">நாடு List</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="நாடு Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createNaadu" type="button" class="btn btn-block btn-primary waves-effect waves-classic">Add நாடு</button>
                            </span>
                         
                         </div>
                    </div>

                @elseif ($page == 'edit')

                    <div class="card-header">
                        நாடு  மாற்ற                  
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" readonly type="text"  class="form-control">
                         <label for="name">நாடு name</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" placeholder="நாடு Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateNaadu" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')


                    <div class="card-header">
                        நாடு List
                        <span class="float-right">
                            <button wire:click="newNaadu" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    <div class="card-body">
                        <input wire:model.name="msg" type="text"  class="form-control">
                        @if ($naadus)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($naadus as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">      
                                        
                               <button wire:click="editNaadu({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No நாடு created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>