<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<div class="form-group">
						<label class="col-sm-2 control-label">Descripci&oacute;n</label>
						<div class="col-sm-4">{{ Form::textarea( 'descripcion',
							$mantenimientos->descripcion, ['class'=>'form-control
							','placeholder'=>'Descripci&oacute;n'] ) }}</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Fecha</label>
		                <div class='input-group date col-sm-4' id='datetimepicker1'>
		                    {{ Form::text( 'fecha', $mantenimientos->fecha,
								['class'=>'form-control fecha','placeholder'=>'Fecha'] ) }}
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Tipo Mantenimiento</label>
						<div class="col-sm-4">{{ Form::select('tipo_mantenimiento',
							['1'=>'Servidores','0'=>'Switches'],
							$mantenimientos->tipo_mantenimiento, ['class' => 'form-control selectTipo'])
							}}</div>
					</div>
					<div class="form-group selectServidor">
                        <label class="col-sm-2 control-label">Servidor Fisico</label>
                        <div class="col-sm-4">
                            {{ Form::select('servidor_id', $servidoresFisicos, $mantenimientos->servidor_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group selectSwitch">
                        <label class="col-sm-2 control-label">Switches</label>
                        <div class="col-sm-4">
                            {{ Form::select('switch_id', $switches, $mantenimientos->switch_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
					<div class="form-group">
						<div class="width-deformer">
							<h5 class="panel-heading page-title">Responsable</h5>
						</div>
						<table style="width: 100%;" class="tableRowUser">
							<tr>
								<td>
									<div class="form-group">
										<label class="col-sm-2 control-label">Nombre</label>
										<div class="col-sm-4">{{ Form::text( 'responsable_nombre',
											$mantenimientos->responsable_nombre, ['class'=>'form-control
											','placeholder'=>'Nombre'] ) }}</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Correo</label>
										<div class="col-sm-4">{{ Form::text( 'responsable_correo',
											$mantenimientos->responsable_correo, ['class'=>'form-control
											','placeholder'=>'Correo'] ) }}</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Tel&eacute;fono</label>
										<div class="col-sm-4">{{ Form::text( 'responsable_telefono',
											$mantenimientos->responsable_telefono, ['class'=>'form-control
											','placeholder'=>'Tel&eacute;fono'] ) }}</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
