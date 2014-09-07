@extends('main')
    
@section('title')欢迎来到邯郸文海贸易集团@stop

@section('content')
<link href="/assets/css/pages/blog_masonry_3col.css" rel="stylesheet">

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{ Lang::get("works.status.".$status)}}</h1>
            <!-- <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Features</a></li>
                <li class="active">Blog Medium</li>
            </ul> -->
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">		
    	<div class="row blog_masonry_3col">    
            <!-- Left Sidebar -->
        	<div class="col-md-9 grid-boxes">
                @if ($works->count())
                    @foreach ($works as $w)
                    <div class="grid-boxes-in">
                        <a href="#"><img class="img-responsive" src='{{"/".$w->image}}' alt=""></a>
                        <div class="grid-boxes-caption">
                            <h3><a href="#">{{$w->name}}</a></h3>
                            <ul class="list-inline grid-boxes-news">
                                <li><span>{{Lang::get("works.author")}}:</span> <a href="#">@foreach ($w->artists as $art) {{$art->name}} @endforeach</a></li>
                            </ul>                    
                            <p>{{$w->summary}}</p>
                        </div>
                    </div>
                    @endforeach
                @else
                    {{ Lang::get("system.norecord")}}
                @endif
                 
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
        	@include('sidebar')
            <!-- End Right Sidebar -->
        </div><!--/row-->        
    </div><!--/container-->		
    <!--=== End Content Part ===-->
   
@stop
    
@section('javascripts')
 <script type="text/javascript" src="/assets/plugins/masonry/jquery.masonry.min.js"></script>
 <script type="text/javascript" src="/assets/js/pages/blog-masonry.js"></script>
@stop