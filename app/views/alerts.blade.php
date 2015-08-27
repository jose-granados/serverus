@if(Session::has('success'))
  <div class="alert alert-success alert-dismissible">{{ Session::get('success') }}</div>
@endif

@if (Session::has('info'))
  <div class="alert alert-info alert-dismissible">{{ Session::get('message') }}</div>
@endif

@if(Session::has('notice'))
  <div class="alert alert-notice alert-dismissible">{{ Session::get('notice') }}</div>
@endif

@if(Session::has('danger'))
  <div class="alert alert-danger alert-dismissible">{{ Session::get('danger') }}</div>
@endif

@if($errors->has())
  <div class="alert alert-danger">
      {{ HTML::ul($errors->all()) }}
  </div>
@endif
<script type="text/javascript">

$(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});

</script>
