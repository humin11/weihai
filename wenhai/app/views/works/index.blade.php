@extends('layouts.scaffold')

@section('main')

<div class="page-header">
	<h1><span class="text-light-gray">{{Lang::get("system.manage", array('string' => Lang::get("menu.works")) )}} </span></h1>
	<div class="pull-right">
		{{ link_to_route('works.create', Lang::get("system.add", array('string' => Lang::get("menu.works") )), null, array('class' => 'btn btn-sm btn-info')) }}
	</div>
</div>

<div class="row">
	<div class="col-md-12"> 
	@if ($works->count())
		<script>
			init.push(function () {
				$('.table').dataTable();
			});
		</script>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>{{Lang::get("works.image")}}</th>
					<th>{{Lang::get("works.name")}}</th>
					<th>{{Lang::get("works.author")}}</th>
					<th>{{Lang::get("works.status")}}</th>
					<th>{{Lang::get("works.summary")}}</th>
					<th>&nbsp;</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($works as $work)
					<tr>
						<td>{{ HTML::image($work->image, $work->name, array('width' => '150px'))}}</td>
	                    <td>{{{ $work->name }}}</td>
	                    <td>
	                    	@foreach ($work->artists as $art) 
	                    		{{$art->name}}
	                    	@endforeach
	                    </td>
						<td>{{ Lang::get("works.status.".$work->status) }}</td>
						<td>{{ $work->summary }}</td>
						<td>
	                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('works.destroy', $work->id))) }}
	                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
	                        {{ Form::close() }}
	                        {{ link_to_route('works.edit', 'Edit', array($work->id), array('class' => 'btn btn-xs btn-info')) }}
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
