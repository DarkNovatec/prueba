@extends ('PagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
@endsection

@section('seccion')


    <div class="btn bg-info text-danger d-grid fs-5 mb-2">Registrar nuevo seguimiento...</div>

    <form action="{{ route('Estudiante.xRegistrar')}}" method="post" class="d-grid gap-2">
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

        @error('ApeEst')
            <div class="alert alert-danger">
                El Apellido es requerido 
            </div>
        @enderror

        <input type="text" name="CodEst" placeholder="Código" value="{{ old('CodEst')}}" class="form-control mb-1">
        <input type="text" name="NomEst" placeholder="Nombres" value="{{ old('NomEst')}}" class="form-control mb-1">
        <input type="text" name="ApeEst" placeholder="Apellidos" value="{{ old('ApeEst')}}" class="form-control mb-1">
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst')}}" class="form-control mb-1">
        <select name="TurMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="1">Turno Día</option>
            <option value="2">Turno Noche</option>
            <option value="3">Turno Tarde</option>
        </select>
        <select name="SemMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}">Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="EstMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        </select>
        <button class="btn bg-info text-danger" type="submit">Agregar</button>
    </form>




    <h3>LISTA</h3>
    <table class="table table-dark table-bordered border-danger table-sm">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Codigo</th>
            <th scope="col">Apellidos y Nombres</th>
            <th scope="col">Edicion</th>
            <th scope="col">Handle</th>
        </tr>
        
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->CodEst}}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle', $item->id)}}">
                        {{$item->ApeEst}}, {{$item->NomEst}}
                    </a>
                </td>
                <td>
                        <form action="{{ route('Estudiante.xEliminar', $item->id) }}" method="post" class="d-inline" onsubmit="return validar();">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                X 
                            </button>
                        </form>
                        ---
                        <a href="{{ route('Estudiante.xActualizar', $item->id ) }}" class="btn btn-warning btn-sm"> 
                            A
                        </a>
                    </td>
                <td>@mdo</td>
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection


   
