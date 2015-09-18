<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $tipo_switches->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripcion</label>
                        <div class="col-sm-4">
                            {{ Form::textarea( 'descripcion', $tipo_switches->descripcion, ['class'=>'form-control ','placeholder'=>'Descripcion'] ) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
