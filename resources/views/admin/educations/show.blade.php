


<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')
                    <div class="card-header">
                        படிப்பு -புதியதாக  சேர்க்க                  
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg"  readonly type="text"  class="form-control">
                         <label for="name">படிப்பு List</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="படிப்பு">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createEducation" type="button" class="btn btn-block btn-primary waves-effect waves-classic">Add படிப்பு</button>
                            </span>
                         
                         </div>
                    </div>

                @elseif ($page == 'edit')

                    <div class="card-header">
                        படிப்பு  மாற்ற                  
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" readonly type="text"  class="form-control">
                         <label for="name">படிப்பு name</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" placeholder="படிப்பு">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateEducation" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">மாற்றுக</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')


                    <div class="card-header">
                        படிப்பு List
                        <span class="float-right">
                            <button wire:click="newEducation" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    <div class="card-body">
                        <input wire:model.name="msg" type="text"  class="form-control">
                        @if ($educations)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($educations as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">      
                                        
                               <button wire:click="editEducation({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
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
                        <p>No Education created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>