@extends('layouts.scaffold')

@section('main')

<h1>All Settings</h1>

<p>{{ link_to_route('settings.create', 'Add New Setting', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($settings->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Keywork</th>
				<th>Description</th>
				<th>Theme</th>
				<th>Logo</th>
				<th>Favicon</th>
				<th>Copyright</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($settings as $setting)
				<tr>
					<td>{{{ $setting->name }}}</td>
					<td>{{{ $setting->keywork }}}</td>
					<td>{{{ $setting->description }}}</td>
					<td>{{{ $setting->theme }}}</td>
					<td>{{{ $setting->logo }}}</td>
					<td>{{{ $setting->favicon }}}</td>
					<td>{{{ $setting->copyright }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('settings.destroy', $setting->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('settings.edit', 'Edit', array($setting->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no settings
@endif

@stop
