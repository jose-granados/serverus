<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear usuario</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'usuarios.store', 'class'=>'form-horizontal'] ) }}

    @include('usuarios/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>
    {{ link_to('usuarios' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
