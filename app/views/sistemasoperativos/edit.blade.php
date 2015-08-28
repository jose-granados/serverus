<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Sistema Operativo</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['sistemasoperativos.update', $sistemasOperativos->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('sistemasoperativos/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>
    {{ link_to('sistemasoperativos' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
