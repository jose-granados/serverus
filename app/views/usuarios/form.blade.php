<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-4">
                            {{ Form::select('estatus', ['1'=>'Activo','0'=>'Inactivo'], $usuario->estatus, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $usuario->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido paterno</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'apellido_paterno', $usuario->apellido_paterno, ['class'=>'form-control ','placeholder'=>'Apellido paterno'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Apellido materno</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'apellido_materno', $usuario->apellido_materno, ['class'=>'form-control ','placeholder'=>'Apellido materno'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Telefono</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'telefono', $usuario->telefono, ['class'=>'form-control ','placeholder'=>'Telefono'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'email', $usuario->email, ['class'=>'form-control ','placeholder'=>'Email'] ) }}
                        </div>
                    </div>
                    @if(in_array(Route::currentRouteName(), ['usuarios.create']))
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Contraseña</label>
                            <div class="col-sm-4">
                                {{ Form::text( 'password', $usuario->password, ['class'=>'form-control ','placeholder'=>'Contraseña'] ) }}
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Perfil</label>
                        <div class="col-sm-4">
                            {{ Form::select('perfil_id', $perfiles, $usuario->perfil_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
