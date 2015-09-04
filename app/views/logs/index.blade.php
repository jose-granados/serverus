<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Logs</h4>
    </div>
</div>

@include('alerts')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper table-responsive">
                    <table class="table table-striped data-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripción</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->descripcion }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['cpus.destroy', $log->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('$log->ruta.show', $log->indice)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
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
