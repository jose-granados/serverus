<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Sistema Operativo</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'sistemasoperativos.store', 'class'=>'form-horizontal'] ) }}

    @include('sistemasoperativos/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>

    {{ link_to('sistemasoperativos' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
