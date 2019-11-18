@extends('layouts.app')
@section('titulo','  Trainers Create')
@section('contenido')
    <div>

       @include('common.error')
        <form class='form-group' method="POST" action="/trainers" enctype="multipart/form-data">
            @csrf
            <div class="container">

                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="trainerName" class="form-control">
                </div>
 
                 <div class="form-group">
                    <label for="">Avatar: </label>
                    <input type="file" name="avatarFile" >
                </div>

                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slugTrainer" class="form-control">
                </div>

                <div class="form-group">
                        <label for="">Descripcion</label>
                        <textarea  type="text" name="descTrainer" class="form-control " cols="30" rows="10"></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

        
    </div>
@endsection
{{-- <html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href=
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
       <div class="container"> 

            <div class="form-group"> 
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

       </div>
        
    </body>
</html> --}}