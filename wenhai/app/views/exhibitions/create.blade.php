@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("menu.exhibition")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('exhibitions.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

@if ($errors->any())
    <script type="text/javascript">
        $.growl.error("{{ implode('', $errors->all('<li class=\"error\">:message</li>')) }}");
    </script>
@endif

{{ Form::open(array('route' => 'exhibitions.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true)) }}

        <div class="form-group dark">
            {{ Form::label('name', Lang::get("exhibition.name").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control','data-rule-required'=>true, 'placeholder'=>Lang::get("exhibition.name"))) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('type', Lang::get("exhibition.type").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('type', array('current' => Lang::get('exhibition.type.current'), 'preview' => Lang::get('exhibition.type.preview'), 'review' => Lang::get('exhibition.type.review')), Input::old('type'), array('class'=>'form-control','data-rule-required'=>true)) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('opentime', Lang::get("exhibition.opentime").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('opentime', Input::old('opentime'), array('class'=>'form-control dp','data-rule-required'=>true, 'readonly'=>true, 'placeholder'=>Lang::get("exhibition.opentime"))) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('starttime', Lang::get("exhibition.starttime").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('starttime', Input::old('starttime'), array('class'=>'form-control dp','data-rule-required'=>true, 'readonly'=>true, 'placeholder'=>Lang::get("exhibition.starttime"))) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('endtime', Lang::get("exhibition.endtime").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('endtime', Input::old('endtime'), array('class'=>'form-control dp','data-rule-required'=>true, 'readonly'=>true, 'placeholder'=>Lang::get("exhibition.endtime"))) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('summary', Lang::get("exhibition.summary").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('summary', Input::old('summary'), array('class'=>'form-control summernote','data-rule-required'=>true, 'placeholder'=>Lang::get("exhibition.summary"))) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('description', Lang::get("exhibition.description").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control summernote','data-rule-required'=>true,  'placeholder'=>Lang::get("exhibition.description"))) }}
            </div>
        </div>

        <div class="form-group dark">
            {{ Form::label('ticket', Lang::get("exhibition.ticket").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('ticket', Input::old('ticket'), array('class'=>'form-control summernote','data-rule-required'=>true, 'placeholder'=>Lang::get("exhibition.ticket"))) }}
            </div>
        </div>

        <div class="form-group dark">
            <script>
                init.push(function () {
                    $('#cover').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('cover', Lang::get("exhibition.cover").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('cover', Input::old('cover'), array('class'=>'form-control', 'data-rule-required'=>true, 'placeholder'=>Lang::get("exhibition.cover"))) }}
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
        var options = {
            todayBtn: "linked",
            format:"yyyy-mm-dd",
            orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
        }
        $('.dp').datepicker(options);

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


