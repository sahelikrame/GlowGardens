@extends('layouts.app')
<style>
    h4{
        color:#54a169;
    }
    h2
    {
        color:#317343;
    }
</style>
@section('content')
<div class="container" style="background-color:whitesmoke;padding:50px;border-radius:20px">
    <h2>{{$Bulbeuse->nom}}</h2>
    <hr>
    <img src="{{$Bulbeuse->image}}" alt="fleur" style="width: 200px;height: 200px; border-radius:20px">
    <hr>
    <h4>Descritpion :</h4>
    <p>{{$Bulbeuse->description}}</p>
    <hr>
    <h4>Nom botanique :</h4>
    {{$Bulbeuse->nom_botanique}} 
    <hr>
    <h4>Info plantes :</h4>
    {!!$Bulbeuse->info_plante!!} <br>
    <hr>
    <h4>Particularités :</h4>
    {!!$Bulbeuse->particularites!!}
    <hr>
    <h4>Avantages :</h4>
    {!!$Bulbeuse->avantages!!}
    <hr>
    <h4>Exposition :</h4>
    {!!$Bulbeuse->exposition!!}
    <hr>
    <h4>Sol :</h4>
    {!!$Bulbeuse->sol!!}
    <hr>
    <h4>Quand semer ? </h4>
    {!!$Bulbeuse->quand_semer!!}
    <hr>
    <h4>Comment semer ?</h4>
    {!!$Bulbeuse->comment_semer!!}
    <hr>
    <center>
        <div class="copyright"> Copyright &copy;2020 - 2021 <span><a href="{{url('/')}}" title="GlowGardens.com" ><span>GlowGardens.com</span></a></span>. Glow Gardens.com est édité par Ikrame SAHEL - Tout droit réservé</div>
    </center>
</div>
@endsection