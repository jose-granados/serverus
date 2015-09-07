<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Crear switch</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>'switches.store', 'class'=>'form-horizontal'] ) }}

    @include('switches/form')

    <button type="submit" class="btn btn-default fill-green ">Guardar</button>

    {{ link_to('switches' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
