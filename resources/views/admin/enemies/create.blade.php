@extends ('layouts.app')

@section('content')
<h1>Crear Nuevo Enemigo</h1>

<form action="{{ route('enemy.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" placeholder="Ingrese los puntos de defensa" require>
  </div>

  
  <div class="form-group">
      <label for="coins">Monedas</label>
      <input type="number" class="form-control" id="coins" name="coins" placeholder="Ingrese la cantidad de monedas" require>
    </div>
    
    <div class="form-group">
        <label for="experience">Experiencia</label>
        <input type="number" class="form-control" id="experience" name="experience" placeholder="Ingrese los puntos de experiencia" require>
    </div>

  <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection