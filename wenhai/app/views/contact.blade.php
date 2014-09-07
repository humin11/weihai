@extends('main')
	
@section('title')
	联系永宸
@stop

@section('content')
	<!--=== Content Part ===-->
	    <div class="container content">     
	        <div class="row margin-bottom-30">
	            <div class="col-md-9 mb-margin-bottom-30">
	                <!-- Google Map -->
	                <div id="map" class="map map-box map-box-space margin-bottom-40"></div>
	                <!-- End Google Map -->

	                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />
	                <form>
	                    <label>Name</label>
	                    <div class="row margin-bottom-20">
	                        <div class="col-md-7 col-md-offset-0">
	                            <input type="text" class="form-control">
	                        </div>                
	                    </div>
                    
	                    <label>Email <span class="color-red">*</span></label>
	                    <div class="row margin-bottom-20">
	                        <div class="col-md-7 col-md-offset-0">
	                            <input type="text" class="form-control">
	                        </div>                
	                    </div>
                    
	                    <label>Message</label>
	                    <div class="row margin-bottom-20">
	                        <div class="col-md-11 col-md-offset-0">
	                            <textarea rows="8" class="form-control"></textarea>
	                        </div>                
	                    </div>
                    
	                    <p><button type="submit" class="btn-u">Send Message</button></p>
	                </form>
	            </div><!--/col-md-9-->
            
	            <div class="col-md-3">
	                <!-- Contacts -->
	                <div class="headline"><h2>联系方式</h2></div>
	                <ul class="list-unstyled who margin-bottom-30">
	                    <li><a href="#"><i class="fa fa-home"></i>湖南省长沙市开福区芙蓉中路一段88号天健芙蓉盛世8栋1206房</a></li>
	                    <li><a href="#"><i class="fa fa-envelope"></i>m18674847717@163.com</a></li>
	                    <li><a href="#"><i class="fa fa-phone"></i>+86 15111057969</a></li>
	                    <li><a href="#"><i class="fa fa-globe"></i>http://www.csyc.com</a></li>
	                </ul>

	                <!-- Business Hours -->
	                <div class="headline"><h2>工作时间</h2></div>
	                <ul class="list-unstyled margin-bottom-30">
	                    <li><strong>星期一到星期五:</strong> 9：00 ~ 17:30</li>
	                </ul>

	                
	            </div><!--/col-md-3-->
	        </div><!--/row-->        

	        <!-- Our Clients -->
	        <div id="clients-flexslider" class="flexslider home clients">
	            <div class="headline"><h2>Our Clients</h2></div>    
	            <ul class="slides">
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/hp_grey.png" alt="" /> 
	                        <img src="assets/img/clients/hp.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/igneus_grey.png" alt="" /> 
	                        <img src="assets/img/clients/igneus.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/vadafone_grey.png" alt="" /> 
	                        <img src="assets/img/clients/vadafone.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/walmart_grey.png" alt="" /> 
	                        <img src="assets/img/clients/walmart.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/shell_grey.png" alt="" /> 
	                        <img src="assets/img/clients/shell.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/natural_grey.png" alt="" /> 
	                        <img src="assets/img/clients/natural.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/aztec_grey.png" alt="" /> 
	                        <img src="assets/img/clients/aztec.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
	                        <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/cisco_grey.png" alt="" /> 
	                        <img src="assets/img/clients/cisco.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/everyday_grey.png" alt="" /> 
	                        <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/cocacola_grey.png" alt="" /> 
	                        <img src="assets/img/clients/cocacola.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
	                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/shell_grey.png" alt="" /> 
	                        <img src="assets/img/clients/shell.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/natural_grey.png" alt="" /> 
	                        <img src="assets/img/clients/natural.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
	                        <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/everyday_grey.png" alt="" /> 
	                        <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
	                    </a>
	                </li>
	                <li>
	                    <a href="#">
	                        <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
	                        <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
	                    </a>
	                </li>
	            </ul>
	        </div><!--/flexslider-->
	        <!-- End Our Clients -->
	    </div><!--/container-->     
	    <!--=== End Content Part ===-->

@stop