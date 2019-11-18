
<div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="trainerName" class="form-control" value="{{$trainer->name}}">
        </div>

         <div class="form-group">
            <label for="">Avatar: </label>
            <input type="file" name="avatarFile" value= "{{$trainer->avatar}}">
        </div>

        <div class="form-group">
                <label for="">Slug</label>
                <input type="text" name="slugTrainer" class="form-control" value="{{$trainer->slug}}">
            </div>

        <div class="form-group">
                <label for="">Descripcion</label>
                <textarea  type="text" name="descTrainer" class="form-control "
                 cols="30" rows="10" >{{$trainer->description}} </textarea>
        </div>
          
            <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>