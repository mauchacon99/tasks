@extends('layout.app')
@section('content')

    <div class="row text-center">
        <h4> Lista de Tareas</h4>
    </div>
    <div class="row">
        <form action="{{route('task.updateStore', $Task)}}"
             method="POST"
        >
             @method('PUT')
            {!! @csrf_field() !!}
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 ">
                    <input type="text" 
                        require placeholder="Ingresar Nueva Tareas" 
                        name="description" id="description" 
                        class="form-control"
                        value="{{ old('description', $Task->description) }}"
                    >
                  
                    @if($errors->has('description'))
                        <div class=" text-danger">
                            {{ $errors->first('description')}}
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button type="submit" class="btn btn-success btn-circle">
                            EDITAR <i class="fas fa-edit"></i>
                    </button>
                    <a href="{{route('task.index')}}" class="btn btn-danger">
                        <i class="fas fa-window-close"></i>
                    </a>
                </div>
            </div>
        </form>
    <div>
    <hr>
    <div class="row">
        @if ($Tasks->isEmpty())
            <div class="row text-center">
                 <h6> 
                     No se han encontrado tareas
                     <i class="fas fa-sad-tear"></i>
                </h6>
                 
            </div>
        @else
            <ul class="list-group list">
                @each('task._row', $Tasks, 'Task')
            </ul>
        @endif
    </div>
@endsection

 