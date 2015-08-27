<!DOCTYPE html>
<!-- saved from url=(0075)http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Serverus</title>


    <!-- Bootstrap Core CSS -->
    {{ HTML::style('public/css/bootstrap.min.css') }}

    <!-- MetisMenu CSS -->
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/dist/css/timeline.css" rel="stylesheet">



    <!-- Morris Charts CSS -->
    <link href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->

    {{ HTML::style('public/css/serverus.css') }}
    {{ HTML::style('public/css/sb-admin-2.css') }}
   {{ HTML::style('public/css/font-awesome.min.css') }}
   {{ HTML::style('public/css/dataTables.bootstrap.min.css') }}

    <!-- jQuery -->

    {{ HTML::script('public/js/jquery.min.js') }}
    {{ HTML::script('public/js/bootstrap.min.js') }}
    {{ HTML::script('public/js/metisMenu.min.js') }}
    {{ HTML::script('public/js/raphael-min.js') }}
    {{ HTML::script('public/js/sb-admin-2.js') }}

    {{ HTML::script('public/js/jquery.dataTables.min.js') }}
    {{ HTML::script('public/js/dataTables.bootstrap.min.js') }}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css"></style></head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./SB Admin 2 - Bootstrap Admin Theme_files/SB Admin 2 - Bootstrap Admin Theme.html"><img class="logo" src="public/img/logo02.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                        <i class="fa fa-gear fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                        <i class="fa fa-map-marker fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="{{ URL::to('logout') }}">
                        <i class="fa fa-power-off fa-fw"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a href="{{ URL::to('/') }}" class="active"><i class="fa fa-dashboard fa-fw fa-2x"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('usuarios') }}"><i class="fa fa-users fa-fw fa-2x"></i> Usuarios </a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/tables.html"><i class="fa fa-server fa-fw fa-2x"></i> Servidores</a>
                        </li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/forms.html"><i class="fa fa-desktop fa-fw fa-2x"></i> CPU</a>
                        </li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#"><i class="fa fa-th-large fa-fw fa-2x"></i> Apps</a>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin-2/pages/index.html#"><i class="fa fa-hdd-o fa-fw fa-2x"></i> OS</a>

                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="min-height: 780px;">

        {{ $content  }}

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body></html>
