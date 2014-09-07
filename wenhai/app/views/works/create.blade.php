@extends('layouts.scaffold')

@section('main')

<div class="page-header">
    <h1><span class="text-light-gray">{{Lang::get("system.create", array('string' => Lang::get("menu.works")) )}} </span></h1>
    <div class="pull-right">
        {{ link_to_route('works.index', Lang::get("system.return", array('string' => '')), null, array('class'=>'btn btn-sm btn-primary')) }}
    </div>
</div>

{{ Form::open(array('route' => 'works.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true)) }}

        <div class="form-group">
            {{ Form::label('name', Lang::get("works.name").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('name', Input::old('name'), array('class'=>'form-control','data-rule-required'=>true, 'placeholder'=>Lang::get("works.name"))) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('artist_id', Lang::get("menu.artist").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('artist_id', $artarray, $artist_id, array('class'=>'form-control','data-rule-required'=>true)) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('status', Lang::get("works.status").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('status', array('tosell' => Lang::get('works.status.tosell'), 'sellout' => Lang::get('works.status.sellout'), 'holdings' => Lang::get('works.status.holdings')), Input::old('status'), array('class'=>'form-control','data-rule-required'=>true)) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('summary', Lang::get("works.summary").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('summary', Input::old('summary'), array('class'=>'form-control summernote','data-rule-required'=>true, 'placeholder'=>Lang::get("works.summary"))) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', Lang::get("works.description").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control summernote', 'placeholder'=>Lang::get("works.description"))) }}
            </div>
        </div>

        <div class="form-group">
            <script>
                init.push(function () {
                    $('#image').pixelFileInput({ placeholder: 'No file selected...' });
                })
            </script>
            {{ Form::label('image', Lang::get("works.image").':', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('image', Input::old('image'), array('class'=>'form-control','data-rule-required'=>true, 'placeholder'=>Lang::get("works.image"))) }}
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


