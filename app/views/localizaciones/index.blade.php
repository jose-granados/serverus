<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Localizaciones</h4>
    </div>
</div>

@include('alerts')

{{ link_to('localizaciones/create', 'Nueva Localizaci&oacute;n', ['class'=>'btn btn-default fill margin-bottom-20'] ) }}

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper table-responsive">
                    <table class="table table-striped data-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($localizaciones as $localizacion)
                                <tr>
                                    <td>{{ $localizacion->id }}</td>
                                    <td>{{ $localizacion->nombre }}</td>
                                    <td>{{ $localizacion->latitud }}</td>
                                    <td>{{ $localizacion->longitud }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['localizaciones.destroy', $localizacion->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('localizaciones.show', $localizacion->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('localizaciones.edit', $localizacion->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a class="borrar-registro"><i class="glyphicon glyphicon-trash"></i></a>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
