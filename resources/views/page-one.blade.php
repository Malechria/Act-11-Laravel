@extends('layouts.custom')

@section('logo')
    <h3>Página uno</h3>
@endsection

@section('content')
    <x-section-title title="Bienvenido a la Primera Página" />
    
    <p>Este es el contenido exclusivo de la página número uno.</p>

    <x-dynamic-button>
        Enviar datos de Alpha
    </x-dynamic-button>
@endsection