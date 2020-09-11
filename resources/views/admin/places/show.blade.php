


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')

                    <div class="card-header">
                        Add New Place
                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                         <label for="name">Place name</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="Place Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createPlace" type="button" class="btn btn-block btn-primary waves-effect waves-classic">Add Place</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')


                    <div class="card-header">
                        Places List
                        <span class="float-right">
                            <button wire:click="newPlace" class="btn btn-sm btn-success waves-effect waves-classic">New Place</button>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($places)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($places as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                            
                                           

                                            <button type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No Places created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>