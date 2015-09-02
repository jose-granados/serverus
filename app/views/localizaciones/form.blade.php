{{ HTML::script('public/js/dashboard/ammap.js') }}
{{ HTML::script('public/js/dashboard/worldLow.js') }}
{{ HTML::script('public/js/dashboard/light.js') }}

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'nombre', $localizaciones->nombre, ['class'=>'form-control ','placeholder'=>'Nombre'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Latitud</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'latitud', $localizaciones->latitud, ['class'=>'form-control ','placeholder'=>'Latitud'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Longitud</label>
                        <div class="col-sm-4">
                            {{ Form::text( 'longitud', $localizaciones->longitud, ['class'=>'form-control ','placeholder'=>'Longitud'] ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
