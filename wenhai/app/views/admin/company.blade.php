@extends('admin')
	
@section('title')欢迎来到永宸@stop

@section('content')
{{ Form::open(array('url' => '#')) }}
	
{{ Form::close() }}
@stop