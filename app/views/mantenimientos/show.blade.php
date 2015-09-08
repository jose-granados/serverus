<div class="row mante">
    <div class="col-lg-12">
        <h4 class="page-header">Ver Mantenimiento</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['class'=>'form-horizontal'] ) }}


    @include('mantenimientos/form')
    {{ HTML::script('public/js/mantenimiento/mantenimiento.js') }}
    {{ HTML::script('public/js/bootstrap-datepicker.js') }}
    {{ link_to('mantenimientos' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}


<script type="text/javascript">

    $(document).ready(function(){
        disable_inputs();
    })

</script>
