<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Localizaci&oacute;n</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'localizaciones.store', 'class'=>'form-horizontal'] ) }}

    @include('localizaciones/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('localizaciones' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
