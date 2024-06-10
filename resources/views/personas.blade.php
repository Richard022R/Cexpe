@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
  <div class="container">
    <h1 class="text-center mt-5">Personas</h1>
    <div>
      @if($personas)
        @foreach($personas as $persona)
          <div class="col-md-3">
            <div class="card mb-4">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                <a href="{{ route('persona.show', $persona->nPerCodigo) }}" class="btn btn-primary">Ver detalles</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center">No hay Personas disponibles</p>
    @endif
  </div>
@endsection