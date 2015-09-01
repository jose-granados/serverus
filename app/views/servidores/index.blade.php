<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Servidores</h4>
    </div>
</div>

@include('alerts')

{{ link_to('servidores/create', 'Nuevo Servidor', ['class'=>'btn btn-default fill-green margin-bottom-20'] ) }}

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
                                <th>Ram</th>
                                <th>HDD</th>
                                <th>IP</th>
                                <th>DNS</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servidores as $servidor)
                                <tr>
                                    <td>{{ $servidor->id }}</td>
                                    <td>{{ $servidor->nombre }}</td>
                                    <td>{{ $servidor->ram }}</td>
                                    <td>{{ $servidor->hdd }}</td>
                                    <td>{{ $servidor->ip }}</td>
                                    <td>{{ $servidor->dns }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['servidores.destroy', $servidor->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('servidores.show', $localizacion->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('servidores.edit', $localizacion->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
