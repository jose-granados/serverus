<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Usuarios</h4>
    </div>
</div>

@include('alerts')

{{ link_to('usuarios/create', 'Nuevo usuario', ['class'=>'btn btn-default fill margin-bottom-20'] ) }}

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper table-responsive">
                    <table class="table table-striped data-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Estatus</th>
                                <th>Nombre completo</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->estatus == 1 ? 'Activo' : 'Inactivo' }}</td>
                                    <td>{{ "$usuario->nombre $usuario->apellido_paterno $usuario->apellido_materno" }}</td>
                                    <td>{{ $usuario->telefono }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                        {{ Form::open( ['route'=>['usuarios.destroy', $usuario->id], 'method' => 'DELETE'] ) }}
                                            <a href="{{URL::route('usuarios.show', $usuario->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{URL::route('usuarios.edit', $usuario->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
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
