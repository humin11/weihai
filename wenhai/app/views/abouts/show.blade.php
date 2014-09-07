@extends('layouts.scaffold')

@section('main')

<h1>Show About</h1>

<p>{{ link_to_route('abouts.index', 'Return to All abouts', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
			<td>{{{ $about->name }}}</td>
					<td>{{{ $about->content }}}</td>
					<td>{{{ $about->type }}}</td>
					<td>{{{ $about->cover }}}</td>
					<td>{{{ $about->cover_min }}}</td>
					<td>{{{ $about->download_cn }}}</td>
					<td>{{{ $about->download_en }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('abouts.destroy', $about->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('abouts.edit', 'Edit', array($about->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
