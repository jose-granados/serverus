<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Ver Servidor</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal view_block'] ) }}


    @include('servidores/form')

    {{ HTML::script('public/js/servidores/servidores.js') }}

    {{ link_to('servidores' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
