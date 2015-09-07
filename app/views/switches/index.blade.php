<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Switches</h4>
    </div>
</div>

@include('alerts')

{{ link_to('switches/create', 'Nuevo Switch', ['class'=>'btn btn-default fill-green margin-bottom-20 new'] ) }}

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
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Serie</th>
                                <th>Versi&oacute;n</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($switches as $switch)
                                <tr>
                                    <td>{{ $switch->id }}</td>
                                    <td>{{ $switch->nombre }}</td>
                                    <td>{{ $switch->modelo }}</td>
                                    <td>{{ $switch->tipo }}</td>
                                    <td>{{ $switch->serie }}</td>
                                    <td>{{ $switch->version }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['switches.destroy', $switch->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('switches.show', $switch->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('switches.edit', $switch->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
