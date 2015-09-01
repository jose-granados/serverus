<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-4">
                            {{ Form::select('estatus', ['1'=>'Activo','0'=>'Inactivo'], $apps->estatus, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $apps->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ruta</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'ruta', $apps->ruta, ['class'=>'form-control ','placeholder'=>'Ruta'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <table style="width: 100%;" class="tableRow">
                            <tr class="clone">
                                <td>
                                    <label class="col-sm-2 control-label">Servicios</label>
                                    <div class="col-sm-4">                            
                                        {{ Form::select('servicio_id', $servicios, $apps->servicio_id, ['class' => 'form-control']) }}
                                    </div>
                                    
                                    <label class="col-sm-2 control-label">Puerto</label>
                                    <div class="col-sm-4">                                          
                                        <input class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="removerow">-</div>
                                </td>
                            </tr>
                        </table>
                        <div class="addrow">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
