<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Ver Localizaciones</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal'] ) }}


    @include('localizaciones/form')

    {{ link_to('localizaciones' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
