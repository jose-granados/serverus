<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear CPU</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'cpus.store', 'class'=>'form-horizontal'] ) }}

    @include('cpus/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>

    {{ link_to('cpus' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
