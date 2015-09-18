<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Ver Tipo de Switches</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal'] ) }}

    @include('tiposwitches/form')

    {{ link_to('tiposwitches' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
