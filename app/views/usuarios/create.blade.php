<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Crear usuario</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'usuarios.store', 'class'=>'form-horizontal'] ) }}

	@include('usuarios/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-primary'] ) }}

	{{ link_to('usuarios' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}