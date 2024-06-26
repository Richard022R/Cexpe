@extends('layouts.layout')
@section('title','personas | ' . $persona->cPerApellido  )
@section('content')

<h2 class="text-3xl">Detalles de la persona</h2>
<section class="leading-8">
  <p><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
  <p><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
  <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
  <p><strong>Fecha de nacimiento:</strong> {{ $persona->cPerFecNac }}</p>
  <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
  <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
  <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
  <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
  <p><strong>Estado:</strong> {{ $persona->nPerEstado }}</p>
</section>
<a href="{{ route('personas.edit', $persona) }}" class="border p-2 bg-cyan-600">Editar</a>
<form action="{{ route('persona.destroy',$persona) }}" method="post">
  @csrf @method('DELETE')
  <button class="border p-2 bg-red-600">Eliminar</button>
</form>
@endsection