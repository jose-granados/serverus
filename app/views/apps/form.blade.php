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
                        <label class="col-sm-2 control-label">Servidor</label>
                        <div class="col-sm-4">
                            {{ Form::select('servidor_id', $servidores ,$apps->servidor, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="width-deformer">
                            <h5 class="panel-heading page-title">Servicios</h5>
                            <a class="addrow"><i class="glyphicon glyphicon-plus-sign color-green fa-2x"> </i></a>
                        </div>
                        <table style="width: 100%;" class="tableRow">
                            <tr class="clone">
                                <td>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Servicio</label>
                                        <div class="col-sm-4">
                                            {{ Form::select('servicio_id[]', $servicios, $apps->servicio_id, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Puerto</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" name="puerto[]">
                                        </div>
                                    </div>
                                    <a class="removerow"><i class="glyphicon glyphicon-minus-sign color-red fa-2x"> </i></a>
                                    <hr></hr>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <div class="width-deformer">
                            <h5 class="panel-heading page-title">Usuarios</h5>
                            <a class="addrow"><i class="glyphicon glyphicon-plus-sign color-green fa-2x"> </i></a>
                        </div>
                        <table style="width: 100%;" class="tableRow">
                            <tr class="clone">
                                <td>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Usuario</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" name="usuario[]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contraseña</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" name="password[]">
                                        </div>
                                    </div>
                                    <a class="removerow"><i class="glyphicon glyphicon-minus-sign color-red fa-2x"> </i></a>
                                    <hr></hr>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
