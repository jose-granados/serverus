<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Bienvenido {{Auth::user()->nombre}}</h4>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row" style="margin-left: 10%;">
    <div class="col-md-3 ">
        <div class="panel panel-primary panel-indicator">
            <div class="panel-heading panel-heading-indicator">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x color-blue"></i>
                    </div>
                    <div class="col-xs-9 text-right color-blue">
                        <div class="huge">26</div>
                        <div>Nuevos Usuarios</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/') }}">
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
                        <i class="fa fa-tasks fa-5x color-green"></i>
                    </div>
                    <div class="col-xs-9 text-right color-green">
                        <div class="huge">12</div>
                        <div>Servidores Online</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/') }}">
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
                        <i class="fa fa-mobile fa-5x color-yellow"></i>
                    </div>
                    <div class="col-xs-9 text-right color-yellow">
                        <div class="huge">124</div>
                        <div>Dispositivos no Registrados</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/') }}">
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
                        <i class="fa fa-support fa-5x color-red"></i>
                    </div>
                    <div class="col-xs-9 text-right color-red">
                        <div class="huge">13</div>
                        <div>Servidores Offline</div>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/') }}">
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
            <!-- /.panel-heading -->

            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

        <!-- /.panel -->

        <!-- /.panel -->
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Log
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-comment fa-fw"></i> New Comment
                        <span class="pull-right text-muted small"><em>4 minutes ago</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                        <span class="pull-right text-muted small"><em>27 minutes ago</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-tasks fa-fw"></i> New Task
                        <span class="pull-right text-muted small"><em>43 minutes ago</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                        <span class="pull-right text-muted small"><em>11:32 AM</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                        <span class="pull-right text-muted small"><em>11:13 AM</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-warning fa-fw"></i> Server Not Responding
                        <span class="pull-right text-muted small"><em>10:57 AM</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                        <span class="pull-right text-muted small"><em>9:49 AM</em>
                        </span>
                    </a>
                    <a href="{{ URL::to('/') }}" class="list-group-item">
                        <i class="fa fa-money fa-fw"></i> Payment Received
                        <span class="pull-right text-muted small"><em>Yesterday</em>
                        </span>
                    </a>
                </div>
                <!-- /.list-group -->
                <button href="" class="btn btn-default btn-block fill">View All Alerts</button>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

        <!-- /.panel -->

        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>

{{ HTML::script('public/js/dashboard/ammap.js') }}
{{ HTML::script('public/js/dashboard/worldLow.js') }}
{{ HTML::script('public/js/dashboard/light.js') }}
{{ HTML::script('public/js/dashboard/dash.js') }}

<!-- /.row -->
<!--{{ HTML::script('public/js/morris.min.js') }}
{{ HTML::script('public/js/morris-data.js') }}-->
