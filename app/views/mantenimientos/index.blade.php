<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Mantenimientos</h4>
    </div>
</div>

@include('alerts')

{{ link_to('mantenimientos/create', 'Nuevo Mantenimiento', ['class'=>'btn btn-default fill-green margin-bottom-20'] ) }}

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper table-responsive">
                    <table class="table table-striped data-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Nombre Responsable</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mantenimientos as $mantenimiento)
                                <tr>
                                    <td>{{ $mantenimiento->id }}</td>
                                    <td>{{ $mantenimiento->descripcion }}</td>
                                    <td>{{ $mantenimiento->fecha }}</td>
                                    <td>{{ $mantenimiento->responsable_nombre }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['mantenimientos.destroy', $mantenimiento->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('mantenimientos.show', $mantenimiento->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('mantenimientos.edit', $mantenimiento->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
