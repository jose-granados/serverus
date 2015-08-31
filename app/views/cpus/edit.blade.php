<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar CPU</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['cpus.update', $cpus->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('cpus/form')

    <button type="submit" class="btn btn-default fill-green">Guardar</button>

    {{ link_to('cpus' , 'Regresar', ['class'=>'btn btn-default fill-blue']) }}

{{ Form::close() }}
