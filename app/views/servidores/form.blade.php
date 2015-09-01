<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $servidores->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ram</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'ram', $servidores->ram, ['class'=>'form-control ','placeholder'=>'Ram'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">DHH</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'hdd', $servidores->hdd, ['class'=>'form-control ','placeholder'=>'HDD'] ) }}
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">IP</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'ip', $servidores->ip, ['class'=>'form-control ','placeholder'=>'IP'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">DNS</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'dns', $servidores->dns, ['class'=>'form-control ','placeholder'=>'dns'] ) }}
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Localizaci&oacute;n</label>
                        <div class="col-sm-4">                        	
                            {{ Form::select('localizacion_id', $localizaciones, $servidores->localizacion_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">CPU</label>
                        <div class="col-sm-4">                        	
                            {{ Form::select('cpu_id', $cpus, $servidores->cpu_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sistema Operativo</label>
                        <div class="col-sm-4">
                             {{ Form::select('sistema_operativo_id', $sistemasOperativos, $servidores->sistema_operativo_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo Servidor</label>
                        <div class="col-sm-4">
                            {{ Form::select('tipo_servidor_id', $tiposServidores, $servidores->tipo_servidor_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
