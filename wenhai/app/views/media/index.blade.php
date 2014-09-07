@extends('layouts.scaffold')

@section('main')

<div class="page-header">
<h1><span class="text-light-gray">{{Lang::get("system.manage", array('string' => Lang::get("menu.medium")) )}} </span></h1>
<div class="pull-right">
{{ link_to_route('media.create', Lang::get("system.add", array('string' => Lang::get("menu.medium") )), null, array('class' => 'btn btn-sm btn-info')) }}
</div>
</div>

<div class="row">
	<div class="col-md-12">

		@if ($media->count())
			<script>
				init.push(function () {
					$('.table').dataTable();
				});
			</script>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
				<th>Content</th>
				<th>Type</th>
				<th>Cover</th>
				<th>Cover_min</th>
				<th>Download_cn</th>
				<th>Download_en</th>
						<th>&nbsp;</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($media as $medium)
						<tr>
							<td>{{{ $medium->name }}}</td>
					<td>{{{ $medium->content }}}</td>
					<td>{{{ $medium->type }}}</td>
					<td>{{{ $medium->cover }}}</td>
					<td>{{{ $medium->cover_min }}}</td>
					<td>{{{ $medium->download_cn }}}</td>
					<td>{{{ $medium->download_en }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('media.destroy', $medium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('media.edit', 'Edit', array($medium->id), array('class' => 'btn btn-info')) }}
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
