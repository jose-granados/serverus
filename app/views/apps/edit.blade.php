<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Aplicación</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['apps.update', $apps->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('apps/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>
    {{ link_to('apps' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
