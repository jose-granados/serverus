<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">CPU's</h4>
    </div>
</div>

@include('alerts')

{{ link_to('tiposwitches/create', 'Nuevo Tipo de Switche', ['class'=>'btn btn-default fill-green margin-bottom-20'] ) }}

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
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipo_switches as $tipo_switche)
                                <tr>
                                    <td>{{ $tipo_switche->id }}</td>
                                    <td>{{ $tipo_switche->nombre }}</td>
                                    <td>{{ $tipo_switche->descripcion }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['tiposwitches.destroy', $tipo_switche->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('tiposwitches.show', $tipo_switche->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('tiposwitches.edit', $tipo_switche->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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

