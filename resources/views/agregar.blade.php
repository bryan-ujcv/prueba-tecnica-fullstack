@extends('index')

@section('content')
<div class="w-75 div_centrado">
    <div class="card-body">
        <div class="col-md-9">
            <h3 class="card-title">Agregar Noticia</h3>
        </div>
    </div>
</div>
<div class="container border p-4 mt-4">
    <form action="{{route('agregar')}}" method="post">
        @csrf

        @error ('titulo')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror

        <div>
            <label for="titulo" class="form-label">Titulo de la Noticia</label>
            <input type="text" name="titulo" class="form-control"><br>
        </div>
        @error ('descripcion')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
        <div>
            <label for="descripcion" class="form-label">Descripcion de la Noticia</label>
            <textarea type="text" name="descripcion" class="form-control"></textarea><br>
        </div>
        @error ('url')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
        <div>
            <label for="url" class="form-label">URL de la Imagen</label>
            <input type="text" name="url" class="form-control"><br>
        </div>
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Agregar</button>
    </form>
</div>

@endsection