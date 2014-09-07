@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.edit", array('string' => Lang::get("menu.artist")) )}} </span> / {{ $artist->name}} </h1>
    <div class="pull-right">
        {{ link_to_route('artists.create', Lang::get("system.add", array('string' => Lang::get("menu.artist") )), null, array('class' => 'btn btn-sm btn-info')) }}
        {{ link_to_route('artists.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12"> 

{{ Form::model($artist, array('class' => 'form-horizontal', 'method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => array('artists.update', $artist->id))) }}

        <div class="form-group">
            {{ Form::label('name', Lang::get("artist.name").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control','data-rule-required'=>'true', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('summary', Lang::get("artist.summary").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('summary', Input::old('summary'), array('class'=>'form-control','data-rule-required'=>'true', 'placeholder'=>'Summary')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', Lang::get("artist.description").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control','data-rule-required'=>'true', 'placeholder'=>'Description')) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#cover').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('cover', Lang::get("artist.cover").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('cover', Input::old('cover'), array('class'=>'form-control', 'placeholder'=>'Cover','data-rule-required'=>'true', 'accept' => 'image/*')) }} <br>
              {{ HTML::image($artist->cover_min)}}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit(Lang::get("system.update", array('string'=> '')), array('class' => 'btn btn-primary')) }}
      {{ link_to_route('artists.show', Lang::get("system.cancel", array('string'=> '')), $artist->id, array('class' => 'btn btn-default')) }}
    </div>
</div>

{{ Form::close() }}

<script type="text/javascript">

    init.push(function () {
        if (! $('html').hasClass('ie8') && ! $('html').hasClass('ie7')  ) {
            $("#summary").summernote({ height:200 });
            $("#description").summernote({
                height:200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        }

        $('form').on('submit', function () {
            if ($(this).valid()) {
                return true;
            }
            return false;
        });
    });
</script>
    </div>
</div>

@stop