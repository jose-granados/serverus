<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Aplicaciones</h4>
    </div>
</div>

@include('alerts')

{{ link_to('apps/create', 'Nueva Aplicación', ['class'=>'btn btn-default fill-green margin-bottom-20'] ) }}

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
                                <th>Arquitectura</th>
                                <th>Versi&oacute;n</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($apps as $app)
                                <tr>
                                    <td>{{ $app->id }}</td>
                                    <td>{{ $app->nombre }}</td>
                                    <td>{{ $app->arquitectura }}</td>
                                    <td>{{ $app->version }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['apps.destroy', $app->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('apps.show', $app->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('apps.edit', $app->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
