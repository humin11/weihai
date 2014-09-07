@extends('layouts.scaffold')

@section('main')

<h1>Show Fair</h1>

<p>{{ link_to_route('fairs.index', 'Return to All fairs', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Content</th>
				<th>Type</th>
				<th>Cover</th>
				<th>Cover_min</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $fair->name }}}</td>
					<td>{{{ $fair->content }}}</td>
					<td>{{{ $fair->type }}}</td>
					<td>{{{ $fair->cover }}}</td>
					<td>{{{ $fair->cover_min }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('fairs.destroy', $fair->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('fairs.edit', 'Edit', array($fair->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
