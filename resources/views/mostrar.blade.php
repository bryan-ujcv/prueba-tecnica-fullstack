@extends('index')

@section('content')
<br>
<div class="container">
    <div class="w-75 div_centrado">
        <div class="card-body">
            <div class="col-md-9">
                <h3 class="card-title">Titulares</h3>
            </div>
        </div>
    </div>
    <div class="card w-75 div_centrado">
        <div class="card-body">
            <div class="col-md-9 ">
                <label for=""><a style="text-decoration: none" href="https://news.google.com/topics/CAAqBwgKMNDolwsw7ZGvAw?hl=es-419&gl=US&ceid=US%3Aes-419">Noticias sobre el COVID-19 </a>Mira la cobertura mas reciente sobre el coronavirus</label>
            </div>
        </div>
    </div><br>
    @foreach ($noticias as $noticia)
    <div class="card w-75 div_centrado">
        <div class="card-body">
            <img class="rounded float-end" src="{{$noticia->url}}" width="100" height="100">
            <div class="col-md-9 ">     
                <h5 class="card-title">{{ $noticia->titulo }}</h5>
                <p class="card-text" for="descripcion">{{$noticia->descripcion}}</p>
            </div><br>
            <div class="col-md-3 d-flex justify-content-end">
                <form action="{{ route('noticia-destroy', [$noticia->id ]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminiar</button>
                </form><br>
                <form action="{{ route('noticia-edit', [$noticia->id ]) }}" method="GET">
                    @csrf
                    <button class="btn btn-success btn-sm"><i class="far fa-edit"></i> Editar</button>
                </form>
            </div>
        </div>
      </div><br>

    @endforeach
</div>
@endsection