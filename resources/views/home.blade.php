@extends('layout.app')
@section('content')

<div class="container" style="padding-top:50px">

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Hello mister !</strong> 
</div>

</div>

<script>
 var test = _.upperCase('Moi je dis j\'envoie valser');
    console.log(test);
</script>

@stop