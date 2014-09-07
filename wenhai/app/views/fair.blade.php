@extends('main')
    
@section('title')欢迎来到邯郸文海贸易集团@stop

@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{Lang::get("fairs.type.".$type)}}</h1>
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

                @if ($fairs->count())
                    <ul class="timeline-v1">
                        <?php $count = 1; ?>
                        @foreach ($fairs as $n)
                            
                            <li  @if ($count%2==0) class="timeline-inverted" @endif>
                                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record invert"></i></div>
                                <div class="timeline-panel">
                                    @if (is_null($n -> cover ) )
                                    @else
                                    <div class="timeline-heading">
                                        <img class="img-responsive" src="{{ "/".$n -> cover }}" alt=""/>
                                    </div>
                                    @endif
                                    <div class="timeline-body text-justify">
                                        <h4><a href="#">{{ $n -> name }}</a></h4>
                                        <!-- <p>{{ $n -> content}}</p> -->
                                    </div>
                                    <div class="timeline-footer primary">
                                        <ul class="list-unstyled list-inline blog-info">
                                            <li><i class="fa fa-clock-o"></i> {{$n -> updated_at}}</li>
                                            <!-- <li><i class="fa fa-comments-o"></i> <a href="#">93 Comments</a></li> -->
                                        </ul>
                                        <!-- <a class="likes" href="#"><i class="fa fa-heart"></i>355</a> -->
                                    </div>
                                </div>
                            </li>
                            <?php $count++; ?>
                            <!--End Blog Post-->        
                        @endforeach
                        <li class="clearfix" style="float: none;"></li>
                    </ul>
                    
                @else
                    {{ Lang::get("system.norecord")}}
                @endif
                      
                
                <!--Pagination-->
                <div class="text-center">
                    {{ $fairs -> links() }}                                                        
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
    