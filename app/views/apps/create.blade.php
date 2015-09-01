<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Aplicación</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'apps.store', 'class'=>'form-horizontal'] ) }}

    @include('apps/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('apps' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
