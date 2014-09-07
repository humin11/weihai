@extends('layouts.scaffold')

@section('main')

<h1>Show Exhibition</h1>

<p>{{ link_to_route('exhibitions.index', 'Return to All exhibitions', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Opentime</th>
				<th>Starttime</th>
				<th>Endtime</th>
				<th>Summary</th>
				<th>Description</th>
				<th>Cover</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $exhibition->name }}}</td>
					<td>{{{ $exhibition->opentime }}}</td>
					<td>{{{ $exhibition->starttime }}}</td>
					<td>{{{ $exhibition->endtime }}}</td>
					<td>{{{ $exhibition->summary }}}</td>
					<td>{{{ $exhibition->description }}}</td>
					<td>{{{ $exhibition->cover }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('exhibitions.destroy', $exhibition->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('exhibitions.edit', 'Edit', array($exhibition->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
