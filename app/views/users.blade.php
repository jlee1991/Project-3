@extends('_master')

@section('head')
  <link rel="stylesheet" href="styles.css" type="text/css">
@stop

@section('title')
  Developers Best Friend
@stop

@section('content')

  {{ Form::open('method' => 'GET') }}
    {{ Form::text('input') }}
    {{ Form::submit('Generate!') }}

    <?php for($i=1;$i<$input;$i++) {?>
    @foreach($person[$i] as $identity)
     <p>{{ $identity }}</p>
    @endforeach
    <?php } ?>

  {{ Form::close() }}
@stop
