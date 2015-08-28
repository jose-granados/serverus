<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Ver usuario</h1>
	</div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal'] ) }}

	@include('usuarios/form')

	{{ link_to('usuarios' , 'Regresar', ['class'=>'btn btn-default']) }}

{{ Form::close() }}


<script type="text/javascript">

	$(document).ready(function(){
		disable_inputs();
	})

</script>