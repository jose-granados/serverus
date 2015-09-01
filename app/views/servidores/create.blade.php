<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear Servidor</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'servidores.store', 'class'=>'form-horizontal'] ) }}

    @include('servidores/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('servidores' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
