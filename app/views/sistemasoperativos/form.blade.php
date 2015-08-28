<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="dataTable_wrapper">
					<div class="form-group">
						<label class="col-sm-2 control-label">Estatus</label>
						<div class="col-sm-10">
							{{ Form::select('estatus', ['1'=>'Activo','0'=>'Inactivo'], $sistemasOperativos->estatus, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							{{ Form::text( 'nombre', $sistemasOperativos->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Arquitectura</label>
						<div class="col-sm-10">
							{{ Form::text( 'arquitectura', $sistemasOperativos->arquitectura, ['class'=>'form-control ','placeholder'=>'Arquitectura'] ) }}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Versi&oacute;n</label>
						<div class="col-sm-10">
							{{ Form::text( 'version', $sistemasOperativos->version, ['class'=>'form-control ','placeholder'=>'Versi&oacute;n'] ) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>