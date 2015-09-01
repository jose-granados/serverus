<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Servicios</h4>
    </div>
</div>

@include('alerts')

{{ link_to('servicios/create', 'Nuevo Servicio', ['class'=>'btn btn-default fill margin-bottom-20'] ) }}

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
                                <th>Versi&oacute;n</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servicios as $servicio)
                                <tr>
                                    <td>{{ $servicio->id }}</td>
                                    <td>{{ $servicio->nombre }}</td>
                                    <td>{{ $servicio->version }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['servicios.destroy', $servicio->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('servicios.show', $servicio->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('servicios.edit', $servicio->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
