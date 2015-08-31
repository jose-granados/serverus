<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar usuario</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['usuarios.update', $usuario->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('usuarios/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>
    {{ link_to('usuarios' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
