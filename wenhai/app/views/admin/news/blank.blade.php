@extends('admin')
	<style>
		#inputs-table td {
			vertical-align: middle;
		}

		.form-controls-demo > * {
			margin-bottom: 15px;
		}
	</style>
	
@section('title')
	永宸新闻中心
@stop

@section('content')
		<div class="page-header">
			<h1><span class="text-light-gray">添加新闻</span></h1>
			<div class="pull-right">
				<a href="/cms/news" class="btn btn-info">新闻列表</a>
			</div>
		</div> <!-- / .page-header -->

		<div class="row">
			<div class="col-sm-12">

				<form action="/cms/news/save" method="post" class="form-horizontal" id="newsForm">
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">标题</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="title" name="title" placeholder="标题">
						</div>
					</div>

					<div class="form-group">
						<label for="content" class="col-sm-2 control-label">新闻内容</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="content" name="content"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="istop" class="col-sm-2 control-label">置顶顺序</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="istop" name="istop" placeholder="">
							<p class="help-block">数字越大，位置越靠上</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-primary">提交</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	<script>
			init.push(function () {
				if (! $('html').hasClass('ie8')) {
					$('#content').summernote({
						height: 200,
						tabsize: 2,
						codemirror: {
							theme: 'monokai'
						}
					});
				}
				
			});
		</script>

	
@stop