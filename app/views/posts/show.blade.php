@extends('layouts.master')

@section('content')
	<style>
	h1 {
		margin-top: 60px;
	}
	</style>
	
	<h1>Single post:</h1>
	<h2>{{{$title}}}</h2>
	<h2><{{{$body}}}</h2>
@stop

