{{ Form::open( ['url'=>'login', 'method'=>"post"] ) }}

    {{ Form::email( 'email', null, ['placeholder'=>'example@mail.com'] ) }}
    {{ Form::password( 'password', ['placeholder'=>'password'] ) }}
    {{ Form::submit( 'Login' ) }}

    @if(Session::has('message'))
        {{ Session::get('message') }}
    @endif
    
{{ Form::close() }}