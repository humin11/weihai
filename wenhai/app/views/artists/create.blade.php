@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("menu.artist")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('artists.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

@if ($errors->any())
    <script type="text/javascript">
        $.growl.error("{{ implode('', $errors->all('<li class=\"error\">:message</li>')) }}");
    </script>
@endif

{{ Form::open(array('route' => 'artists.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true)) }}

        <div class="form-group dark">
            {{ Form::label('name', Lang::get("artist.name").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'Name', 'data-rule-required'=>'true')) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('summary', Lang::get("artist.summary").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('summary', Input::old('summary'), array('class'=>'form-control summernote', 'placeholder'=>'Summary', 'data-rule-required'=>'true')) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('description', Lang::get("artist.description").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control summernote', 'placeholder'=>'Description', 'data-rule-required'=>'true')) }}
            </div>
        </div>

        <div class="form-group dark">
            <script>
                init.push(function () {
                    $('#cover').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('cover', Lang::get("artist.cover").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('cover', array('class'=>'form-control', 'placeholder'=>'Cover', 'data-rule-required'=>'true', 'accept' => 'image/*')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit(Lang::get("system.create", array('string'=> '')), array('class' => 'btn btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

<script type="text/javascript">

    init.push(function () {
        if (! $('html').hasClass('ie8') && ! $('html').hasClass('ie7')  ) {
            $(".summernote").summernote({
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

@stop


