<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Crear CPU</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'cpus.store', 'class'=>'form-horizontal'] ) }}

	@include('cpus/form')

	{{ Form::submit( 'Guardar' , ['class'=>'btn btn-default fill'] ) }}

	{{ link_to('cpus' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}