<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Tipo de Switch</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['tiposwitches.update', $tipo_switches->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('tiposwitches/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('tiposwitches' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
