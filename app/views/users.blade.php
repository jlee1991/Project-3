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
    <input type="checkbox" value="Yes" name="address">Generate Address<br>
    <input type="checkbox" value="Yes" name="text">Generate Text<br>
    <input type="submit" value="Submit">
  </form>

  $iteration=$_GET['subject'];

    <?php for($i=1;$i<$iteration;$i++) {?>

      //Person
        @foreach($person[$i]["name"] as $name)
         <p>{{ $name }}</p>
        @endforeach

      //Address
      <?php if($_GET['address']=='Yes'){ ?>
        @foreach($person[$i]["address"] as $address)
         <p>{{ $address }}</p>
        @endforeach
      <?php } ?>
    <?php else{}; ?>

      //Text
      <?php if($_GET['text']=='Yes'){ ?>
        @foreach($person[$i]["text"] as $text)
         <p>{{ $text }}</p>
        @endforeach
      <?php } ?>
    <?php else{}; ?>
    <?php } ?>

@stop
