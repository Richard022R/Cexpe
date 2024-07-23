@extends('layouts.app')

@section('title', 'Talleres')

@section('content')
  <h1 class="text-center text-3xl">Talleres</h1>
  <ul>
    @if($talleres)
      @foreach($talleres as $taller)
        <li>{{ $taller }}</li>
      @endforeach
  </ul>
  @else
    <p>No hay talleres disponibles</p>
  @endif
@endsection