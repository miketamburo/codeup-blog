@extends('layouts.master')

@section('content')
    <h1>Hello, {{{$name}}}!</h1>
    <a href="{{{ action('HomeController@showWelcome') }}}">Home</a>
@stop

@section('bottomscript')
    <script>
    </script>
@stop