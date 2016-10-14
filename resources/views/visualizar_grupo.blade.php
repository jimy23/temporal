@extends('layout_admin')

@section('content_user')
    @if (Auth::check())
        {{ Auth::user()->nombre}}
    @else
        Nada
    @endif
@endsection

@section('content')

    <div class="row">
        <h1 class="page-header">Gestión de grupos</h1>
    </div>
    <p>
        <a href="{{url('/grupos/ingresar')}}">Añadir Grupos</a>
    </p>
    <div class="row"
    <div class="col-lg-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body"
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Clasificacion</th>
                        <th>Jornada</th>
                        <th>Grado</th>
                        <th>Institucion</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($grupos as $grupo)
                        <tr>
                            <td>{{$grupo->codigoGrupo}}</td>
                            <td>{{$grupo->clasificacion}}</td>
                            <td>{{$grupo->jornada}}</td>
                            <td>{{$grupo->grado}}</td>
                            <td>{{$grupo->institucion_codigoInstitucion}}</td>
                            <td><input type="checkbox" name="borrar"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>


    {!! Html::script('js/jquery-1.12.3.js') !!}
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
@endsection