@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-left:85px">
@foreach($datas as $data)
    <div class="card col-md-3 col-sm-3 sol-xs-3" style="margin:20px;border-radius:10px;background-color:whitesmoke">
    <img src="{{$data->image}}" class="card-img-top" alt="fleur" style="margin-top:20px">
    <div class="card-body">
    <h5 class="card-title">{{$data->nom}}</h5>
    <p class="card-text">{{ str_limit($data->description, $limit = 80) }}</p>
    <a href="{{route('Jardin.show',['Jardin'=>$data->id])}}" class="btn btn-success" style="background-color:#54a169">Autres informations</a>
    @auth
    <a href="{{route('Jardin.edit',['Jardin'=>$data->id])}}" role="button" class="btn btn-white" style="background-color:#ffae24;margin-top:5px;color:white">Mettre a jour</a>     
    <form method="POST" action="{{route('Jardin.destroy',['Jardin'=>$data->id])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-top:5px">Supprimer</button>
    </form>
    @endauth
    </div>
    </div>
@endforeach
<div style="margin-left:350px">
{!!$datas->render()!!}
</div>
    </div>
</div>
@stop
