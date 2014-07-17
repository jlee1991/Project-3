@extends('_master')

@section('head')
  <link rel="stylesheet" href="styles.css" type="text/css">
@stop

@section('title')
  Developers Best Friend
@stop

@section('content')
<form action='index.php' method='GET'>
  Generate Users (Max 99): <input type="text" value="" name="subject" maxlength="2"><br>
  <input type="submit" value="Submit">
</form>

$iteration=$_GET['subject'];

    @foreach($paragraphs as $item)
     <p>{{ $item }}</p>
    @endforeach

@stop
