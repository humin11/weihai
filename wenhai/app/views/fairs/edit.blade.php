@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.edit", array('string' => Lang::get("menu.Fair")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('fairs.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

{{ Form::model($fair, array('class' => 'form-horizontal', 'method' => 'PATCH', 'enctype' => 'multipart/form-data', 'files' => true, 'route' => array('fairs.update', $fair->id))) }}

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
              {{ Form::text('type', Input::old('type'), array('class'=>'form-control', 'placeholder'=>'Type')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('cover', 'Cover:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('cover', Input::old('cover'), array('class'=>'form-control', 'placeholder'=>'Cover')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('cover_min', 'Cover_min:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('cover_min', Input::old('cover_min'), array('class'=>'form-control', 'placeholder'=>'Cover_min')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit(Lang::get("system.update", array('string'=> '')), array('class' => 'btn btn-primary')) }}
      {{ link_to_route('fairs.show', Lang::get("system.cancel", array('string'=> '')), $fair->id, array('class' => 'btn btn-default')) }}
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