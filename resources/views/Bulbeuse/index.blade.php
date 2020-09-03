@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-left:85px">
@foreach($donnees as $donnee)
    <div class="card col-md-3 col-sm-3 sol-xs-3" style="margin:20px;border-radius:10px;background-color:whitesmoke">
    <img src="{{$donnee->image}}" class="card-img-top" alt="fleur" style="margin-top:20px">
    <div class="card-body">
    <h5 class="card-title">{{$donnee->nom}}</h5>
    <p class="card-text">{{ str_limit($donnee->description, $limit = 80) }}</p>
    <a href="{{route('Bulbeuse.show',['Bulbeuse'=>$donnee->id])}}" class="btn btn-success" style="background-color:#54a169">Autres informations</a>
    @auth
    <a href="{{route('Bulbeuse.edit',['Bulbeuse'=>$donnee->id])}}" role="button" class="btn btn-white" style="background-color:#ffae24;margin-top:5px;color:white">Mettre a jour</a>     
    <form method="POST" action="{{route('Bulbeuse.destroy',['Bulbeuse'=>$donnee->id])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-top:5px">Supprimer</button>
    </form>
    @endauth
    </div>
    </div>
@endforeach
<div style="margin-left:350px">
{!!$donnees->render()!!}
</div>
    </div>
</div>
@stop