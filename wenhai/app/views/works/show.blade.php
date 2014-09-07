@extends('layouts.scaffold')

@section('main')

<h1>Show Work</h1>

<p>{{ link_to_route('works.index', 'Return to All works', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Summary</th>
				<th>Description</th>
				<th>Cover</th>
				<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $work->name }}}</td>
					<td>{{{ $work->summary }}}</td>
					<td>{{{ $work->description }}}</td>
					<td>{{{ $work->cover }}}</td>
					<td>{{{ $work->image }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('works.destroy', $work->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('works.edit', 'Edit', array($work->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
