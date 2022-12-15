<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
@extends ('PagPlantilla')

@section('Titulo del Monchito')
    <h1 class="display-4">PAGINA DE LISTA </h1>
@endsection

@section('seccion')
    <h3>Detalle Estudiante</h3>
    <p>ID:                   {{ $xDetAlumnos->id}}</p>
    <p>CODIGO:               {{ $xDetAlumnos->CodEst}}</p>
    <p>APELLIDOS Y NOMBRES:  {{ $xDetAlumnos->ApeEst}}, {{ $xDetAlumnos->NomEst}}</p>
    <p>FECHA DE NACIMIENTO:  {{ $xDetAlumnos->fnaEst}}</p>
    <p>TURNO:                {{ $xDetAlumnos->TurEst}}</p>
    <p>SEMESTRE:             {{ $xDetAlumnos->SemEst}}</p>
    <p>ESTADO DE MATRICULA:  {{ $xDetAlumnos->EstEst}}</p>
@endsection
            </div>
        </div>
    </div>
</x-app-layout>
