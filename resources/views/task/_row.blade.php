<li class="list-group-item d-flex justify-content-between align-items-center border border-dark">
      
      @if($Task->status)
            {{ $Task->description }}
      @else
            <del> {{ $Task->description }} </del>
      @endif

      <div>
            <form method="POST" 
                  action="{{ route('task.destroy', $Task)}}"
            >
                  @csrf
                  @method('DELETE')

                  <a href="{{route('task.status', $Task)}} " 
                        class="btn btn-{{ ($Task->status)? 'primary' : 'secondary   disabled' }}">
                        <i class="fa fa-{{ ($Task->status)? 'check-double' : 'check-circle '}}">
                        </i>
                  </a>
                  <button type="submit" 
                          class="btn btn-{{($Task->status)?'danger':'secondary'}} "
                  >
                        <i class="fas fa-trash-alt"> </i>
                  </button> 

                  <a href="{{route('task.update', $Task)}}"
                  class="btn btn-{{ ($Task->status)? 'info' : 'secondary   disabled' }}">
                  <i class="far fa-edit">
                  </i>
            </a>

            </form>
      </div>
</li>
 
    
   

   
       
