@extends('main')
	
@section('title')
	永宸新闻中心
@stop

@section('content')
    <!--=== Content Part ===-->
       <div class="container content">     
           <div class="row">
               <!-- Begin Sidebar Menu -->
               
               <!-- End Sidebar Menu -->

               <!-- Begin Content -->
               <div class="col-md-9">
                      <?php foreach ($news as $n): ?>
                          
                        <div class="shadow-wrapper margin-bottom-60">
                            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                                <h2>{{ $n -> title}} <div class="pull-right">{{$n -> updated_at}}</div></h2>
                                <p>{{ $n -> content}}</p>
                            </div>
                        </div>
                        
               </div>
               <!-- End Content -->
			   
	           @include('sidebar')
           </div>
		
       </div><!--/container-->     
       <!--=== End Content Part ===-->

	
@stop