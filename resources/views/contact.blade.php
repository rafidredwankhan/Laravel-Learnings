<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Contact page </h1>
</body>
</html> -->

@extends('layouts.app')


@section('content')

<h1> Contact page </h1>

@if (count($people))
    <ul>

        @foreach($people as $person)

<li> {{$person}} </li>

@endforeach
    </ul>

@endif

@stop

@section('footer')

<script> alert('Hello :D') </script>

@stop