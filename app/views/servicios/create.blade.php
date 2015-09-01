<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Servicio</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'servicios.store', 'class'=>'form-horizontal'] ) }}

    @include('servicios/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>

    {{ link_to('servicios' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
