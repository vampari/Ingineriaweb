@extends('master')

@section('contenido')
<form action ="">
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="form-group">
    <label for="control">Numbero de control:</label>
    <input type="text" class="form-control"name="control" required>
  </div>
  <div class="form-group">
  <label for="edad">Edad:</label>
  <input type="number" class="form-control"name="edad" required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo:</label>
    <select  name="sexo" class="form-control">
      <option value="0">Fermenino</option>
      <option value="1">Masculino</option>
    </select>
  </div>
  <div class="form-group"
    <label for="carrera">Carrera:</label>
    <select class="form-control" name="carrera">
          @foreach($carrera as $c)
            <option value="{{$c->id}}">{{$c->nombre}}</option>
          @endforeach
    </select>
  <div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    <a href="{{url('/')}}" class"btb  btb-primary"> Cancelar </a>

  </div>

</form>

@stop
