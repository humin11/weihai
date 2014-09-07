@extends('layouts.scaffold')

@section('main')

<h1>Show Artist</h1>

<p>{{ link_to_route('artists.index', 'Return to All artists', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Summary</th>
				<th>Description</th>
				<th>Cover</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $artist->name }}}</td>
					<td>{{{ $artist->summary }}}</td>
					<td>{{{ $artist->description }}}</td>
					<td>{{{ $artist->cover }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('artists.destroy', $artist->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('artists.edit', 'Edit', array($artist->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
