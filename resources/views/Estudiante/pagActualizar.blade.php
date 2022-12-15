<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
               @extends('pagPlantilla') 

                @section('titulo')
                    <h1 class="display-4">Actualizar</h1>
                @endsection

                @section('seccion')
                    @if(session('msj'))
                        <div class="alert alert-success">
                            {{ session('msj') }}
                        </div>
                    @endif

                <form action="{{ route('Estudiante.xUpdate', $xActAlumnos->id) }}" method="post" class="d-grid gap-2">
                        @method('PUT')
                        @csrf

                        @error('CodEst')
                            <div class="alert alert-danger">
                                El código es requerido
                            </div>
                        @enderror

                        @error('NomEst')
                            <div class="alert alert-danger">
                                El nombre es requerido 
                            </div>
                        @enderror

                        @if(true)
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                El <strong>apellido</strong> es requerido 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <input type="text" name="CodEst" placeholder="Código" value="{{ $xActAlumnos->CodEst}}" class="form-control mb-2">
                        <input type="text" name="NomEst" placeholder="Nombres" value="{{ $xActAlumnos->NomEst}}" class="form-control mb-2">
                        <input type="text" name="ApeEst" placeholder="Apellidos" value="{{ $xActAlumnos->ApeEst}}" class="form-control mb-2">
                        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ $xActAlumnos->fnaEst}}" class="form-control mb-2">
                        <select name="TurMat" class="form-control mb-2">
                            <option value="">Seleccione...</option>
                            <option value="1" @if ($xActAlumnos->TurMat == 1){{"SELECTED"}} @endif>Turno Día(1)</option>
                            <option value="2" @if ($xActAlumnos->TurMat == 2){{"SELECTED"}} @endif>Turno noche(2)</option>
                            <option value="3" @if ($xActAlumnos->TurMat == 3){{"SELECTED"}} @endif>Turno tarde(3)</option>
                        </select>
                        <select name="SemMat" class="form-control mb-2">
                            <option value="">Seleccione...</option>
                            @for($i=1; $i < 7; $i++)
                                <option value="{{$i}}" @if ($xActAlumnos->SemMat == $i){{"SELECTED"}} @endif>Semestre {{$i}}</option>
                            @endfor
                        </select>
                        <select name="EstMat" class="form-control mb-2">
                            <option value="">Seleccione...</option>
                            <option value="1" @if ($xActAlumnos->EstMat == 1){{"SELECTED"}} @endif>Activo</option>
                            <option value="0" @if ($xActAlumnos->EstMat == 0){{"SELECTED"}} @endif>Inactivo</option>
                        </select>
                        <button class="btn btn-success" type="submit">Actualizar</button>
                    </form>
                @endsection
            </div>
        </div>
    </div>
</x-app-layout>