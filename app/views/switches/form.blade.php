<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $switches->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Modelo</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'modelo', $switches->modelo, ['class'=>'form-control ','placeholder'=>'Modelo'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-4">
                            
                            {{ Form::select('tipo_switch_id', $tipoSwitches, $switches->tipo_switch_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Serie</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'serie', $switches->serie, ['class'=>'form-control ','placeholder'=>'Serie'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Versi&oacute;n</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'version', $switches->version, ['class'=>'form-control ','placeholder'=>'Versi&oacute;n'] ) }}
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Localizaci&oacute;n</label>
                        <div class="col-sm-4">
                        	
                            {{ Form::select('localizacion_id', $localizaciones, $switches->localizacion_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'usuario', $switches->usuario, ['class'=>'form-control ','placeholder'=>'Usuario'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'password', $switches->password, ['class'=>'form-control ','placeholder'=>'Password'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password Enabled</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'password_enabled', $switches->password_enabled, ['class'=>'form-control ','placeholder'=>'Password Enabled'] ) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
