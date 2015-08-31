<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $cpus->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
