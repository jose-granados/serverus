<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Crear Sistema Operativo</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'sistemasoperativos.store', 'class'=>'form-horizontal'] ) }}

	@include('sistemasoperativos/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-primary'] ) }}

	{{ link_to('sistemasoperativos' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}