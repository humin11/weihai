@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("system.settings")) )}} </span></h1>
</div>

{{ Form::open(array('route' => 'settings.store', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'data-rule-required'=> true, 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('keywork', 'Keywork:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('keywork', Input::old('keywork'), array('class'=>'form-control', 'placeholder'=>'Keywork')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control summernote', 'placeholder'=>'Description')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('theme', 'Theme:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('theme', Input::old('theme'), array('class'=>'form-control', 'placeholder'=>'Theme')) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#logo').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('logo', 'Logo:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('logo', Input::old('logo'), array('class'=>'form-control', 'placeholder'=>'Logo')) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#favicon').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('favicon', 'Favicon:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('favicon', Input::old('favicon'), array('class'=>'form-control', 'placeholder'=>'Favicon')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('copyright', 'Copyright:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('copyright', Input::old('copyright'), array('class'=>'form-control', 'placeholder'=>'Copyright')) }}
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
                 
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
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


