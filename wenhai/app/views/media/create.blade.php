@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("menu.medium")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('media.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

{{ Form::open(array('route' => 'media.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true)) }}

        <div class="form-group">
            {{ Form::label('name', 'Name:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control', 'placeholder'=>'Name')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('content', 'Content:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('content', Input::old('content'), array('class'=>'form-control', 'placeholder'=>'Content')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('type', 'Type:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('type', array('news' => Lang::get('media.type.news'), 'info' => Lang::get('media.type.info'), 'report' => Lang::get('media.type.report'), 'cooperation' => Lang::get('media.type.cooperation')), Input::old('type'), array('class'=>'form-control','data-rule-required'=>true)) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#cover').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('cover', 'Cover:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('cover', Input::old('cover'), array('class'=>'form-control', 'placeholder'=>'Cover')) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#download_cn').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('download_cn', 'Download_cn:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('download_cn', Input::old('download_cn'), array('class'=>'form-control', 'placeholder'=>'Download_cn')) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#download_en').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('download_en', 'Download_en:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('download_en', Input::old('download_en'), array('class'=>'form-control', 'placeholder'=>'Download_en')) }}
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


