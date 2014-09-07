@extends('layouts.scaffold')

@section('main')

<div class="page-header">
<h1><span class="text-light-gray">{{Lang::get("getsystem.manage", array('string' => Lang::get("menu.fair")) )}} </span></h1>
<div class="pull-right">
{{ link_to_route('fairs.create', Lang::get("system.add", array('string' => Lang::get("menu.fair") )), null, array('class' => 'btn btn-sm btn-info')) }}
</div>
</div>

<div class="row">
	<div class="col-md-12">

		@if ($fairs->count())
			<script>
				init.push(function () {
					$('.table').dataTable();
				});
			</script>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Cover</th>
						<th>Name</th>
						<th>Type</th>
						<th>&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($fairs as $fair)
						<tr>
							<td>{{ HTML::image($fair->cover_min) }}</td>
							<td>{{{ $fair->name }}}</td>
							<td>{{{ $fair->type }}}</td>
		                    <td>
		                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('fairs.destroy', $fair->id))) }}
		                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
		                        {{ Form::close() }}
		                        {{ link_to_route('fairs.edit', 'Edit', array($fair->id), array('class' => 'btn btn-xs btn-info')) }}
		                    </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
		  {{ Lang::get("system.norecord")}}
		@endif
	</div>
</div>
@stop
