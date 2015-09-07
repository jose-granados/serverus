<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Bienvenido {{Auth::user()->nombre}}</h4>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row indicadores">
    <div class="col-md-3 ">
        <div class="panel panel-primary panel-indicator">
            <div class="panel-heading panel-heading-indicator">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-3x color-blue"></i>
                    </div>
                    <div class="col-xs-9 text-right color-blue">
                        <div class="huge"><?php echo count($usuarios);?></div>
                        <div>Nuevos usuarios</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('usuarios') }}">
                <div class="panel-footer fill-blue">
                    <span class="pull-left">Ver detalle</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="panel panel-green panel-indicator">
            <div class="panel-heading panel-heading-indicator">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-3x color-green"></i>
                    </div>
                    <div class="col-xs-9 text-right color-green">
                        <div class="huge">12</div>
                        <div>Servidores online</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('servidores') }}">
                <div class="panel-footer fill-green">
                    <span class="pull-left">Ver detalle</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="panel panel-yellow panel-indicator">
            <div class="panel-heading panel-heading-indicator">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-mobile fa-3x color-yellow"></i>
                    </div>
                    <div class="col-xs-9 text-right color-yellow">
                        <div class="huge"><?php echo count($apps);?></div>
                        <div>Aplicaciones registrados</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('apps') }}">
                <div class="panel-footer fill-yellow">
                    <span class="pull-left">Ver detalle</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="panel panel-red panel-indicator">
            <div class="panel-heading panel-heading-indicator">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-3x color-red"></i>
                    </div>
                    <div class="col-xs-9 text-right color-red">
                        <div class="huge">13</div>
                        <div>Servidores offline</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('servidores') }}">
                <div class="panel-footer fill-red">
                    <span class="pull-left">Ver detalle</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i></i>
                    <div id="chartdiv"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Log
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    @foreach($logs as $log)
                    <div class="list-group-item">
                        {{$log->descripcion}}
                    <span class="pull-right text-muted small"><em>{{$log->created_at->format('M j, Y H:i:s')}}</em>
                        </span>
                    </div>
                    @endforeach                                        
                </div>
                <!-- /.list-group -->
                <a href="{{ URL::to('logs') }}" class="btn btn-default btn-block arrow">Listado de Logs</a>
            </div>
        </div>
    </div>
</div>

{{ HTML::script('public/js/dashboard/ammap.js') }}
{{ HTML::script('public/js/dashboard/worldLow.js') }}
{{ HTML::script('public/js/dashboard/light.js') }}
{{ HTML::script('public/js/dashboard/dash.js') }}
