<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Sistemas Operativos</h4>
    </div>
</div>

@include('alerts')

{{ link_to('sistemasoperativos/create', 'Nuevo Sistema Operativo', ['class'=>'btn btn-default fill margin-bottom-20'] ) }}

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
                            @foreach($sistemasOperativos as $sistemaOperativo)
                                <tr>
                                    <td>{{ $sistemaOperativo->id }}</td>
                                    <td>{{ $sistemaOperativo->nombre }}</td>
                                    <td>{{ $sistemaOperativo->arquitectura }}</td>
                                    <td>{{ $sistemaOperativo->version }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['sistemasoperativos.destroy', $sistemaOperativo->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('sistemasoperativos.show', $sistemaOperativo->id)}}"><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="{{URL::route('sistemasoperativos.edit', $sistemaOperativo->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
