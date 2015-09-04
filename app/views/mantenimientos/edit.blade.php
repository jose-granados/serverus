<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Mantenimiento</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['mantenimientos.update', $mantenimientos->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('mantenimientos/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>
    {{ link_to('mantenimientos' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
