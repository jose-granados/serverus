<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Editar CPU</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['cpus.update', $cpus->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

	@include('cpus/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-primary'] ) }}

	{{ link_to('cpus' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}