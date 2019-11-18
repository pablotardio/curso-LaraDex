@extends('layouts.app')
@section('titulo','  Trainers Create')
@section('contenido')
    <div>
    <form class='form-group' method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          @include('trainers.form')
  </form>

        
    </div>
@endsection