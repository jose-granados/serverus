<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Ver Aplicación</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal view_block'] ) }}


    @include('apps/form')

    {{ link_to('apps' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
