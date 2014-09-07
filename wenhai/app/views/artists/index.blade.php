@extends('layouts.scaffold')

@section('main')

<div class="page-header">
	<h1><span class="text-light-gray">{{Lang::get("system.manage", array('string' => Lang::get("menu.artist")) )}} </span></h1>
	<div class="pull-right">
		{{ link_to_route('artists.create', Lang::get("system.add", array('string' => Lang::get("menu.artist") )), null, array('class' => 'btn btn-sm btn-info')) }}
	</div>
</div>

<div class="row">
	<div class="col-md-12"> 
		@if ($artists->count())
			<script>
				init.push(function () {
					$('.table').dataTable();
				});
			</script>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>{{ Lang::get("artist.cover")}}</th>
						<th>{{ Lang::get("artist.name")}}</th>
						<th>{{ Lang::get("artist.summary")}}</th>
						<th>{{ Lang::get("artist.description")}}</th>
						<th>&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($artists as $artist)
						<tr>
							<td><img src="{{$artist->cover_min}}"></td>
							<td>{{{ $artist->name }}}</td>
							<td>{{ $artist->summary }}</td>
							<td>{{ $artist->description }}</td>
		                    <td>
		                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('artists.destroy', $artist->id))) }}
		                            {{ Form::submit(Lang::get("system.delete", array('string' => '')), array('class' => 'btn btn-xs btn-danger')) }}
		                        {{ Form::close() }}
		                        {{ link_to_route('artists.edit', Lang::get("system.edit", array('string' => '')), array($artist->id), array('class' => 'btn btn-xs btn-info')) }}
		                        {{ link_to_route('works.create', Lang::get("system.create", array('string' => Lang::get("menu.works"))), array('artist_id'=>$artist->id), array('class' => 'btn btn-xs btn-info')) }}
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
