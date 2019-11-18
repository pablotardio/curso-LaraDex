@extends('layouts.app')
@section('titulo')
    Entrenadores
@endsection
@section('contenido')
<div class="row" style="
margin: 20;">
  @foreach ($trainers as $trainer)
        <div class="col-sm">
            
            <div class="card text-center" style="width: 18rem;">
                <img style="height: 100px ; width: 100px ; background-color: #EFEFEF ;margin: 20;" class="card-img-top rounded-circle  mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
                    <div class="card-body">
                  
                      <h5 class="card-title"> {{ $trainer->name}}</h5>
                    <p class="card-text">{{$trainer->description}}</p>
                      <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Mas</a>
                    </div>
             </div> 
         </div>
   
   @endforeach
</div>
@endsection