@extends('_master')

@section('head')
  <link rel="stylesheet" href="styles.css" type="text/css">
@stop

@section('title')
  Developers Best Friend
@stop

@section('content')

  <form action='users' method='GET'>
    Generate Users (Max 99): <input type="text" value="" name="subject" maxlength="2"><br>
    <input type="checkbox" value="Yes" name="address">Generate Address<br>
    <input type="checkbox" value="Yes" name="text">Generate Text<br>
    <input type="submit" value="Submit">
  </form><br>

@if(isset($person))
  @for($i=0; $i < $numusers; $i++)

    <b><p>{{$person[$i]["name"]}}</p></b>

    @if(isset($_GET['address']))
      @if($_GET['address']=='Yes')
      <p>{{$person[$i]["address"]}}</p>
      @endif
    @endif

    @if(isset($_GET['text']))
      @if($_GET['text']=='Yes')
      <p>{{$person[$i]["text"]}}</p>
      @endif
    @endif

  @endfor
@endif

@stop
