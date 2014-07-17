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

    @foreach($paragraphs as $item)
     <p>{{ $item }}</p>
    @endforeach

  {{ Form::close() }}
@stop
