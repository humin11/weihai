@extends('main')
    
@section('title')欢迎来到邯郸文海贸易集团@stop

@section('content')
    <link rel="stylesheet" href="/assets/css/pages/profile.css">

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">{{ Lang::get("menu.artist")}}</h1>
            <!-- <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Features</a></li>
                <li class="active">Blog Medium</li>
            </ul> -->
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content profile">		
    	<div class="row">    
            <!-- Left Sidebar -->
        	<div class="col-md-9 md-margin-bottom-40">
                <div class="profile-body margin-bottom-20">
                     <div class="row margin-bottom-20">
                        <?php $count = 1; ?>
                        @if ($artists->count())
                            @foreach ($artists as $artist)
                                <!--Profile Blog-->
                               
                                    <div class="col-sm-6 sm-margin-bottom-20">
                                        <div class="profile-blog">
                                            <img class="rounded-x" src="{{$artist->cover_min}}" alt="">
                                            <div class="name-location">
                                                <strong>{{ $artist->name }}</strong>
                                                <!-- <span><i class="fa fa-map-marker"></i><a href="#">California,</a> <a href="#">US</a></span> -->
                                            </div>
                                            <div class="clearfix margin-bottom-20"></div>    
                                            <p>{{ $artist->summary }}</p>
                                            <hr>
                                            <ul class="list-inline share-list">
                                                <li><i class="fa fa-book"></i><a href="#">12 出版物</a></li>
                                                <li><i class="fa fa-photo"></i><a href="#">54 展览</a></li>
                                                <li><i class="fa fa-share"></i><a href="#">履历</a></li>
                                            </ul>
                                        </div>
                                    </div>        

                                @if($count%2==0)
                                    </div><!--/end row-->
                                    <div class="row margin-bottom-20">  
                                @endif 
                                <!--End Profile Blog-->
                                <?php $count++; ?>
                            @endforeach
                        @else
                            {{ Lang::get("system.norecord")}}
                        @endif
                        </div>

                        <!--Pagination-->
                        <div class="text-center">
                            {{ $artists -> links() }}                                                        
                        </div>
                        <!--End Pagination-->

                        <!-- <button type="button" class="btn-u btn-u-default btn-block text-center">Load More</button>    -->
                        <!--End Profile Blog-->
                    </div>
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
        	@include('sidebar')
            <!-- End Right Sidebar -->
        </div><!--/row-->        
    </div><!--/container-->		
    <!--=== End Content Part ===-->
@stop
    