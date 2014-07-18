@extends('_master')

@section('head')
  <link rel="stylesheet" href="styles.css" type="text/css">
@stop

@section('title')
  Developers Best Friend
@stop

@section('content')
<a href='/'>Return Home</a>

<form action='loremipsum' method='GET'>
  Generate Users (Max 99): <input type="text" value="" name="pages" maxlength="2"><br>
  <input type="submit" value="Submit">
</form>

  @if(isset($paragraphs))
    @foreach($paragraphs as $item)
     <p>{{ $item }}</p>
    @endforeach
  @endif

@stop
