@extends('layouts.scaffold')

@section('main')

<h1>Show Medium</h1>

<p>{{ link_to_route('media.index', 'Return to All media', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
