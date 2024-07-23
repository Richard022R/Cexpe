@extends('layouts.app')

@section('title','Editar Persona | ' . $persona->cPerApellido  )

@section('content')
<h2 class="text-3xl">Editar persona</h2>
<form action="{{ route('personas.update', $persona) }}" method="post">
    @csrf @method('PATCH')
    <label for="cPerApellido">Apellido:</label>
    <input type="text" name="cPerApellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}" class="border p-2 mb-2">
    <br>
    <label for="cPerNombre">Nombre:</label>
    <input type="text" name="cPerNombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}" class="border p-2 mb-2">
    <br>
    <label for="cPerDireccion">Dirección:</label>
    <input type="text" name="cPerDireccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}" class="border p-2 mb-2">
    <br>
    <label for="cPerFecNac">Fecha de nacimiento:</label>
    <input type="date" name="cPerFecNac" value="{{ old('cPerFecNac',$persona->cPerFecNac) }}" class="border p-2 mb-2">
    <br>
    <label for="nPerEdad">Edad:</label>
    <input type="number" name="nPerEdad" value="{{ old('nPerEdad',$persona->nPerEdad) }}" class="border p-2 mb-2">
    <br>
    <label for="cPerSexo">Sexo:</label>
    <input type="text" name="cPerSexo" value="{{ old('cPerSexo',$persona->cPerSexo) }}" class="border p-2 mb-2">
    <br>
    <label for="nPerSueldo">Sueldo:</label>
    <input type="number" name="nPerSueldo" value="{{ old('nPerSueldo',$persona->nPerSueldo) }}" class="border p-2 mb-2">
    <br>
    <label for="cPerRnd">RND:</label>
    <input type="text" name="cPerRnd" value="{{ old('cPerRnd',$persona->cPerRnd) }}" class="border p-2 mb-2">
    <br>
    <label for="nPerEstado">Estado:</label>
    <input type="number" name="nPerEstado" value="{{ old('nPerEstado',$persona->nPerEstado) }}" class="border p-2 mb-2">
    <br>
    <button class="border p-2 bg-cyan-600">Actualizar</button>
</form>
@endsection