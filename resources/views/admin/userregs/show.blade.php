

<div  class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            @if ($page == 'add')                   
                    <div class="card-header">
                        கடவுள்- புதியதாக  சேர்க்க                     
                    </div>
                     
          

                @elseif ($page == 'edit')

                    
            @elseif($page == 'show')

                    
                    
                    <div class="card-header">
                        God List
                        <span class="float-right">
                               <button wire:click="newUser" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    

                      
                     
            @endif
        </div>
    </div>
</div>  

 
@push('scripts')
@endpush
