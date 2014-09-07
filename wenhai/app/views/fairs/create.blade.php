@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("menu.fair")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('fairs.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

{{ Form::open(array('route' => 'fairs.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true)) }}

        <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('content', 'Content:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('content', Input::old('content'), array('class'=>'form-control summernote', 'placeholder'=>'Content')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('type', Lang::get("fairs.type").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('type', array('internal' => Lang::get('fairs.type.internal'), 'abroad' => Lang::get('fairs.type.abroad')), Input::old('type'), array('class'=>'form-control','data-rule-required'=>true)) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#cover').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('cover', Lang::get("fairs.cover").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('cover', Input::old('cover'), array('class'=>'form-control', 'placeholder'=>Lang::get("fairs.cover"))) }}
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


