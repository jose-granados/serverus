<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Editar usuario</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['usuarios.update', $usuario->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

	@include('usuarios/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-primary'] ) }}

	{{ link_to('usuarios' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}