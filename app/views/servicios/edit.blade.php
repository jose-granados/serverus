<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Servicio</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['servicios.update', $servicios->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('servicios/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>
    {{ link_to('servicios' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
