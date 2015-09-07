<?php

$module = Request::segment(1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="public/img/favicon.ico" />
    <title>Serverus</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('public/css/bootstrap.min.css') }}
    {{ HTML::style('public/css/font-awesome.min.css') }}
    {{ HTML::style('public/css/dataTables.bootstrap.min.css') }}
    {{ HTML::style('public/css/serverus.css') }}

    {{ HTML::script('public/js/jquery.min.js') }}
    {{ HTML::script('public/js/bootstrap.min.js') }}
    {{ HTML::script('public/js/metisMenu.min.js') }}
    {{ HTML::script('public/js/jquery.dataTables.min.js') }}
    {{ HTML::script('public/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('public/js/bootbox.min.js') }}
    {{ HTML::script('public/js/serverus.js') }}

</head>
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
                <a class="navbar-brand" href="{{ URL::to('/') }}">{{ HTML::image('public/img/logo.png', 'Logo', array('class' => 'logo')) }}</a>

            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('/') }}">
                        <i class="fa fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="{{ URL::to('usuarios/1') }}">
                                <div>
                                    <strong>Epifauno Alebrije</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                             <div class="sangria">
                                 <strong>Poweruser</strong>
                             </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{ URL::to('/') }}">
                        <i class="fa fa-map-marker fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="{{ URL::to('/') }}">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/') }}">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/') }}">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/') }}">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/') }}">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="{{ URL::to('localizaciones') }}">
                                <strong>Geolocalizaciones</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::to('logout') }}">
                        <i class="fa fa-power-off fa-fw"></i>
                    </a>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a href="{{ URL::to('/') }}" class="{{ $module == '' ? 'active' : '' }}">
                                <i class="fa fa-dashboard fa-fw fa-2x"></i> Inicio
                            </a>
                        </li>

                        @if(Usuario::canAccess('servicios.index'))
                            <li>
                                <a href="{{ URL::to('servicios') }}" class="{{ $module == 'servicios' ? 'active' : '' }}">
                                    <i class="fa fa-wrench fa-fw fa-2x"></i> Servicios
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('usuarios.index'))
                            <li>
                                <a href="{{ URL::to('usuarios') }}" class="{{ $module == 'usuarios' ? 'active' : '' }}">
                                    <i class="fa fa-users fa-fw fa-2x"></i> Usuarios
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('servidores.index'))
                            <li>
                                <a href="{{ URL::to('servidores') }}" class="{{ $module == 'servidores' ? 'active' : '' }}">
                                    <i class="fa fa-server fa-fw fa-2x"></i> Servidores
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('switches.index'))
                            <li>
                                <a href="{{ URL::to('switches') }}" class="{{ $module == 'switches' ? 'active' : '' }}">
                                    <i class="fa fa-sliders fa-fw fa-2x"></i> Switches
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('cpus.index'))
                            <li>
                                <a href="{{ URL::to('cpus') }}" class="{{ $module == 'cpus' ? 'active' : '' }}">
                                    <i class="fa fa-desktop fa-fw fa-2x"></i> CPU
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('apps.index'))
                            <li>
                                <a href="{{ URL::to('apps') }}" class="{{ $module == 'apps' ? 'active' : '' }}">
                                    <i class="fa fa-th-large fa-fw fa-2x"></i> Apps
                                </a>
                            </li>
                        @endif

                        @if(Usuario::canAccess('sistemasoperativos.index'))
                            <li>
                                <a href="{{ URL::to('sistemasoperativos') }}" class="{{ $module == 'sistemasoperativos' ? 'active' : '' }}">
                                    <i class="fa fa-hdd-o fa-fw fa-2x"></i> OS
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper" style="min-height: 780px;">

        {{ $content  }}

        </div>
    </div>
</body>
</html>
