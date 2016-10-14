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
        <h1 class="page-header">Gestión de instituciones</h1>
    </div>
    <p>
        <a href="{{url('/instituciones/ingresar')}}">Añadir Institucion</a>
    </p>
    <div class="row"
        <div class="col-lg-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body"
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>NIT</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>telefono</th>
                                <th>Sitio web</th>
                                <th>Ciudad</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instituciones as $institucion)
                                <tr>
                                    <td>{{$institucion->codigoInstitucion}}</td>
                                    <td>{{$institucion->nombre}}</td>
                                    <td>{{$institucion->direccion}}</td>
                                    <td>{{$institucion->telefono}}</td>
                                    <td>{{$institucion->sitioWeb}}</td>
                                    <td>{{$institucion->ciudad}}</td>
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