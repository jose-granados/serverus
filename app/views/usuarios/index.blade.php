<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Usuarios</h4>
    </div>
</div>

@include('alerts')

<button href="usuarios/create" class="btn btn-primary fill margin-bottom-20">Nuevo usuario</button>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="data-table" class="table table-striped" cellspacing="0" width="100%">
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
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function(){
        $('#data-table').DataTable();
    });

</script>
