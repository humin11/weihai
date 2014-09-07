@extends('admin')
	
@section('title')
	永宸新闻中心
@stop

@section('content')
		<div class="page-header">
			<h1>新闻列表</h1>
			<div class="pull-right">
				<a href="/cms/news/blank" class="btn btn-warning">添加新闻</a>
			</div>
		</div> <!-- / .page-header -->

		<div class="row">
			<div class="col-sm-12">

<!-- 5. $DEFAULT_TABLES ============================================================================

				Default tables
-->
				<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">新闻管理</span>
					</div>
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>标题</th>
									<th>创建时间</th>
									<th>是否置顶</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($news as $n): ?>
                          
                        		<tr>
									<td>{{ $n->title}}</td>
									<td>{{ $n->created_at}}</td>
									<td>{{ $n->istop}}</td>
									<td><a href="#" class="btn btn-xs btn-info">置顶</a> &nbsp;<a href="#" class="btn btn-xs btn-danger">删除</a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
<!-- /5. $DEFAULT_TABLES -->

			</div>
		</div>
	
@stop