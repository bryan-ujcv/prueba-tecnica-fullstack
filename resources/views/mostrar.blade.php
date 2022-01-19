@extends('index')

@section('content')
<div class="container">
    @foreach ($noticias as $todo)

    <div class="row py-1">
        <div class="col-md-9 d-flex align-items-center">
            <!-- <img src="{{$todo->url}}" alt=""> <br>    -->
            <a href="{{ route('todos-edit', ['id' => $todo->id]) }}">{{ $todo->titulo }}</a>
            <label for="descripcion">{{$todo->descripcion}}</label>
        </div>

        <div class="col-md-3 d-flex justify-content-end">
            <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</button>
            </form>
        </div>
    </div>

    @endforeach
</div>
@endsection