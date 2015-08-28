<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Editar Sistema Operativo</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['sistemasoperativos.update', $sistemasOperativos->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

	@include('sistemasoperativos/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-primary'] ) }}

	{{ link_to('sistemasoperativos' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}