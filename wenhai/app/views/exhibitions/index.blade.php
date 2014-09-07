@extends('layouts.scaffold')

@section('main')

<div class="page-header">
	<h1><span class="text-light-gray">{{Lang::get("system.manage", array('string' => Lang::get("menu.exhibition")) )}} </span></h1>
	<div class="pull-right">
		{{ link_to_route('exhibitions.create', Lang::get("system.add", array('string' => Lang::get("menu.exhibition") )), null, array('class' => 'btn btn-sm btn-info')) }}
	</div>
</div>

<div class="row">
	<div class="col-md-12"> 
	@if ($exhibitions->count())
		<script>
			init.push(function () {
				$('.table').dataTable();
			});
		</script>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>{{Lang::get("exhibition.cover")}}</th>
					<th>{{Lang::get("exhibition.name")}}</th>
					<th>{{Lang::get("exhibition.type")}}</th>
					<th>{{Lang::get("exhibition.opentime")}}</th>
					<th>{{Lang::get("exhibition.starttime")}}</th>
					<th>{{Lang::get("exhibition.endtime")}}</th>
					<th>&nbsp;</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($exhibitions as $exhibition)
					<tr>
						<td>{{ HTML::image($exhibition->cover_min) }}</td>
						<td>{{ $exhibition->name }}</td>
						<td>{{ Lang::get("exhibition.type.".$exhibition->type) }}</td>
						<td>{{ $exhibition->opentime }}</td>
						<td>{{ $exhibition->starttime }}</td>
						<td>{{ $exhibition->endtime }}</td>
	                    <td>
	                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('exhibitions.destroy', $exhibition->id))) }}
	                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
	                        {{ Form::close() }}
	                        {{ link_to_route('exhibitions.edit', 'Edit', array($exhibition->id), array('class' => 'btn btn-xs btn-info')) }}
	                    </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		{{Lang::get("system.norecord")}}
	@endif
	</div>
</div>

@stop
