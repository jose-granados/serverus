<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Editar Switch</h4>
    </div>
</div>

@include('alerts')

{{ Form::open( ['route'=>['switches.update', $localizaciones->id], 'method' => 'PUT', 'class'=>'form-horizontal'] ) }}

    @include('switches/form')

    <button type="submit" class="btn btn-default fill">Guardar</button>
    {{ link_to('switches' , 'Regresar', ['class'=>'btn btn-default fill']) }}

{{ Form::close() }}
