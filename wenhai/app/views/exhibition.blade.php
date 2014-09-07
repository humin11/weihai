@extends('main')
    
@section('title')欢迎来到邯郸文海贸易集团@stop

@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{Lang::get("exhibition.type.".$type)}}</h1>
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
    	<div class="row blog-page">    
            <!-- Left Sidebar -->
        	<div class="col-md-9 md-margin-bottom-40">

                @if ($exhibitions->count())
                    @foreach ($exhibitions as $ex)
                        <!--Blog Post-->
                        <div class="row blog blog-medium">
                            <div class="col-md-3">
                                <a href="#"><img class="img-responsive" src='{{ "/".$ex -> cover }}' alt=""></a>
                            </div>    
                            <div class="col-md-9">
                                <h2><a href="#"> {{ $ex->name }}</a></h2>
                                <ul class="list-unstyled list-inline blog-info">
                                    <li><i class="fa fa-calendar"></i> {{ $ex->starttime }} ~ {{$ex->endtime}}</li>
                                    <!-- <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li> -->
                                    <!-- <li><i class="fa fa-tags"></i> Technology, Internet</li> -->
                                </ul>
                                <p>{{$ex->summary}}</p>
                            </div>    
                        </div>
                        <!--End Blog Post--> 
                        <hr>   
                    @endforeach
                @else
                    {{ Lang::get("system.norecord")}}
                @endif
                      
                
                <!--Pagination-->
                <div class="text-center">
                    {{ $exhibitions -> links() }}                                                        
                </div>
                <!--End Pagination-->
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
        	@include('sidebar')
            <!-- End Right Sidebar -->
        </div><!--/row-->        
    </div><!--/container-->		
    <!--=== End Content Part ===-->
@stop
    