@extends('layouts.app')
@section('titulo')
    Trainer
@endsection
@section('contenido')
@include('common.sucess')
<div class ="text-center"> 
  
  <img style="height: 100px ; width: 100px ; background-color: #EFEFEF ;margin: 20;" class="card-img-top rounded-circle  mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
  <div class="card-body">
    
    <h5 class="text"> {{ $trainer->name}}</h5>
    <p class="text">{{$trainer->description}}</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
   
    
    <form action="/trainers/{{$trainer->slug}}" method="POST">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger">Eliminar</button>
  </form>
  </div>

</div>
@endsection