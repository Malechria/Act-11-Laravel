@extends('layouts.custom')

@section('logo')
    <h3>Página dos</h3>
@endsection

@section('content')
    <x-section-title title="Sección de la Segunda Página" />
    
    <p>Aquí estará la información completamente distinta usando la misma plantilla base.</p>

    <x-dynamic-button>
        Confirmar acción en página dos
    </x-dynamic-button>
@endsection