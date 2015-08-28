<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Ver Sistema Operativo</h1>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal'] ) }}


    @include('sistemasoperativos/form')

    {{ link_to('sistemasoperativos' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
