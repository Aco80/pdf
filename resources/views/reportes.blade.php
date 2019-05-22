
@extends('layouts.principal')

@Section('contenido')

  <h1>{{ __('Titulo') }}</h1>


 <ul>

   @foreach ($Users as $User)

     <li>{{ $User->name }}</li>

  @endforeach
</ul>
@endSection
