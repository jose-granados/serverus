<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Tipo de Switche</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'tiposwitches.store', 'class'=>'form-horizontal'] ) }}

    @include('tiposwitches/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('tiposwitches' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
