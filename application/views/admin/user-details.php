<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Utter Now</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Favicon -->
    <?php include 'css.php';?>
    <link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .pointer {
            cursor:pointer;
        }
        .dropdown-menu{
           min-width:auto;
        }
		
    </style>
</head>

<body>
<?php include 'loader.php';?>
        <!-- /Preloader -->
        <div class="wrapper  theme-3-active pimary-color-green">
            <?php include 'nev.php';?>
                <?php include 'menu.php';?>
                    <?php include 'r-slide.php';?>
	
	
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
				<!-- Row -->
				<div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="user_details">
                                                             
                    </div>	
					<div class="col-lg-9 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div  class="panel-body pb-0">
									<div  class="tab-struct custom-tab-1">
										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
											<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Transaction</span></a></li>
											<li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Deals</span></a></li>
											<li role="presentation" class=""><a  data-toggle="tab" id="photos_tab_8" role="tab" href="#photos_8" aria-expanded="false"><span>Photos</span></a></li>
											<li role="presentation" class=""><a  data-toggle="tab" id="earning_tab_8" onclick="location_visit();" role="tab" href="#earnings_8" aria-expanded="false"><span>Location Visit</span></a></li>
											<li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Reviews</span></a></li>
										
										</ul>
										<div class="tab-content" id="myTabContent_8">
											<div  id="profile_8" class="tab-pane fade active in" role="tabpanel" onclick="transaction()">
												<div class="col-md-12" id="transaction" >                                                                             
                                                                                                
                                                            
                                                </div>
											</div>
											
											<div  id="follo_8" class="tab-pane fade" role="tabpanel">
												<div class="row">
													<div class="col-lg-12">
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                            <div class="profile-box card-view">
                                                                <div class="profile-cover-pic" style="background:url(img/deals.jpg);background-size: cover;">
                                                                    <div class="item-big">
                                                                        <!-- START carousel-->
                                                                        <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                                                                            <ol class="carousel-indicators">
                                                                                <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
                                                                                <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
                                                                                <li data-target="#carousel-example-captions-1" data-slide-to="2"></li>
                                                                                <li data-target="#carousel-example-captions-1" data-slide-to="3"></li>
                                                                            </ol>
                                                                            <div role="listbox" class="carousel-inner">
                                                                                <div class="item active"> <img src="img/deals.jpg" alt="First slide image"> </div>
                                                                                <div class="item"> <img src="img/deals.jpg" alt="Second slide image"> </div>
                                                                                <div class="item"> <img src="img/deals.jpg" alt="Second slide image"> </div>
                                                                                <div class="item"> <img src="img/deals.jpg" alt="Second slide image"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- END carousel-->
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="profile-info text-center mt-15">                                                             
                                                                    
                                                                    <h5 class="block mb-5 weight-500 capitalize-font txt-success text-left">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h5>
                                                                </div>	
                                                                <div class="social-info">
                                                                    <div class="row">
                                                                        <div class="product-detail-wrap">
                                                                            <div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
                                                                            <span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 "></i>  Get this deal by spending 25 points  </span>
                                                                        </div>        
                                                                        <div class=" bg-gray">
                                                                            <p class="block txt-grey font-12 capitalize-font  ">Purchase at 25 Dec 2018 &nbsp; 12:30 AM </p>
                                                                        </div>                                                                                                 
                                                                        <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>                                          
                                                                </div>
                                                            </div>                                                          
                                                        </div>	
													</div>
												</div>
											<div  id="photos_8" class="tab-pane fade" role="tabpanel">
												<div class="col-md-12 pb-20">
													<div class="gallery-wrap">
														<div class="portfolio-wrap project-gallery">
															<ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
																<li  class="item"   data-src="img/gallery/equal-size/mock1.jpg" data-sub-html="" >
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock1.jpg"  alt="" />
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock2.jpg"   data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock2.jpg"  alt="" />
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock3.jpg" data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock3.jpg"  alt="" />
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock4.jpg"  data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock4.jpg"  alt="" />
																	<span class="hover-cap"> Location Name</span>
																	</a>
																</li>
																
																<li class="item" data-src="img/gallery/equal-size/mock5.jpg" data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock5.jpg"  alt="" />	
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock6.jpg"  data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock6.jpg"  alt="" />
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock7.jpg" data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock7.jpg"  alt="" />	
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
																<li class="item" data-src="img/gallery/equal-size/mock8.jpg"  data-sub-html="">
																	<a href="#">
																	<img class="img-responsive" src="img/gallery/equal-size/mock8.jpg"  alt="" />
																	<span class="hover-cap">Location Name</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>	
											</div>
											<div  id="earnings_8" class="tab-pane fade" role="tabpanel" onclick="location_visit">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<form id="example-advanced-form" action="#">
															<div class="table-wrap">
																<div class="table-responsive">
																	<table class="table table-striped display product-overview" id="datable_1">
																		<thead>
																			<tr>
																				<th>Date</th>
																				<th>Time</th>
																				<th>Location name</th>
																				<th>Address</th>
																			</tr>
																		</thead>
																		<tbody id="tbody">
																		</tbody>
																	</table>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div  id="settings_8" class="tab-pane fade" role="tabpanel">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<div class="">
															<div class="panel-wrapper collapse in">
																<div class="panel-body pa-0">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="panel panel-default card-view">
                                                                            <div class="panel-wrapper collapse in">
                                                                                <div class="panel-body sm-data-box-1">
                                                                                    <div class="sl-item">
                                                                                        
                                                                                            <p class="inline-block block"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Deals name</span>
                                                                                                <span class="pull-right">
                                                                                                    <label class="pointer">
                                                                                                        <input type="checkbox" value="" class="js-switch" checked> 
                                                                                                    </label>           
                                                                                                </span>
                                                                                            </p>
                                                                                            <span class="block txt-grey font-12 capitalize-font">Location Name </span>                                                                        
                                                                                            <span class="block txt-dark weight-500 font-15 pt-5">
                                                                                                <i class="fa fa-star-half-empty txt-success font-20 mr-10 text-left"></i> 4.2
                                                                                                <span class="txt-grey font-12 capitalize-font pull-right">1 Day Ago </span>
                                                                                            </span>
                                                                                        </div>
                                                                                    <div class="pull-left">
                                                                                        <p class="block txt-dark font-13 capitalize-font pb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget </p>
                                                                                    </div>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class=" bg-gray">
                                                                                        <p class="block txt-grey font-12 capitalize-font  ">Photos &nbsp; 20 </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
							
					</div>
				</div>
				<!-- /Row -->
			
			</div>
            <?php include 'footer.php';?>
			
		</div>
        <!-- /Main Content -->

    </div>
    <?php include 'script.php';?>
        <script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>
		
		<script src="dist/js/form-file-upload-data.js"></script>
        <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="dist/js/isotope.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
         <script src="js/index.js"></script>
	<script src="dist/js/lightgallery-all.js"></script>
	<script src="dist/js/froogaloop2.min.js"></script>
	<script src="dist/js/gallery-data.js"></script>
        <script>
            $(document).ready(function () {
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elems.forEach(function(html) {
            var switchery = new Switchery(html);
            });

            });
             var b = location.href.substring(location.href.indexOf("?")+1); 
              var id= parseInt(b);   
               ajax();
               transaction();               
               function location_visit(){
                 $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'customer_id':id},
                    method:'get',
                    url:'/utter/api/cud/location_visits',
                    success:function(res){
                    if($.trim(res.status)=='true'){ 
                    result=res;
                     $.each(res.data, function( key, value ) {   
                     var date=moment(value.date).format('DD MMM YYYY');  
                       var time=moment(value.date).format('hh:mm A');                                              
                                                                    
                      $('#tbody').append('<tr><td>'+date+'</td><td>'+time+'</td><td>'+value.name+'</td><td>'+value.address+'</td></tr>');
                   });
                       
                      // pagination("organzation_list",res,page);


                    }                
                  }

                 })   
               }
               function transaction(){
               
                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'customer_id':id},
                    method:'get',
                    url:'/utter/api/cud/user_transactions',
                    success:function(res){
                    if($.trim(res.status)=='true'){ 
                    result=res;
                     $.each(res.data, function( key, value ) { 
                     if(value.credit_points==='0')
                     {
                       var heading='Add '+value.debit_points+' Points';
                       var cls='<span class="text-success font-16"><i class="fa fa-plus-square"></i>';
                     } 
                     else{
                        var heading='Redeem '+value.credit_points+' Points';
                        var cls='<span class="text-warning font-16"><i class="fa fa-minus-circle"></i>';
                     } 
                       var date=moment(value.date).format('DD MMM YYYY');  
                       var time=moment(value.date).format('hh:mm A');                            
                                                                    
                      $('#transaction').append('<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> <div class="panel panel-default card-view pa-0 pt-10 pbg"> <div class="sl-content pl-10"> <div class="clearfix"></div><p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500 pt-15">Date</span><span>'+date+'</span> &nbsp; <span class="capitalize-font txt-success mr-5 weight-500">Time</span><span>'+time+'</span></p><span class="block txt-grey font-12 capitalize-font mb-15">'+cls+'</span> &nbsp; '+heading+' </span> <div class="clearfix"></div></div></div></div>');
                   });
                       
                      // pagination("organzation_list",res,page);


                    } 
                    else{
                       $('#transaction').append('<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> No Transaction Found!!</div>'); 
                    }               
                  }

                 })                           
                       
                }
              

              function ajax(page=1){ 
                var result;
              $('#user_details').html('');


                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'customer_id':id},
                    method:'get',
                    url:'/utter/api/cud/user_details',
                    success:function(res){
                    if($.trim(res.status)=='true'){ 
                   result=res;
                     $.each(res.data, function( key, value ) {
                      // console.log(value);
                        if(value.user_name=='')
                        {
                            name='N/a';                           
                            
                        }
                        else{
                            name=value.user_name;                           
                            
                        }
                        if(value.user_address=='')
                        {
                             address='N/a';
                        }
                       else{                           
                            address=value.user_address;
                             
                        }
                        if(value.user_email=='')
                        {
                             email='N/a';
                        }
                       else{                           
                            email=value.user_email;
                             
                        }
                        if(value.user_mobile=='')
                        {
                             mobile='N/a';
                        }
                       else{                           
                            mobile=value.user_mobile;
                             
                        }
                        if(value.user_image=='')
                        {
                            src='img/utter-now.png';
                        }
                       else{                           
                             src=value.user_image;
                             
                        }
                                             
                      $('#user_details').append('<div class="profile-box card-view" > <div class="profile-cover-pic" style="background:url(img/pr.jpg);"> <div class="profile-image-overlay"></div></div><div class="profile-info text-center"> <div class="profile-img-wrap"> <img class="inline-block mb-10" src="'+src+'" alt="user"/> </div><span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 "></i> 25 </span> <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">'+name+'</h5> <h6 class="block capitalize-font"> <i class="fa fa-phone font-14"></i> &nbsp; <span class="font-13">'+mobile+'</span> </h6> <h6 class="block capitalize-font"> <i class="fa fa-envelope font-14"></i> &nbsp; <span class="font-13">'+email+' </span> </h6> <h6 class="block capitalize-font mb-20"> <i class="fa fa-map-marker font-14"></i> &nbsp; <span class="font-13"> '+address+' </span> </h6> <div class="clearfix"></div><div class="row mb-20"> <h6 class="txt-success mb-20">Spending Points</h6><div class="col-xs-4 text-center"><span class="counts block head-font txt-success"><span class="counter-anim">'+value.total_points+'</span></span><span class="counts-text block ">Total</span></div><div class="col-xs-4 text-center"><span class="counts block head-font txt-success"><span class="counter-anim">'+value.total_earn_points+'</span></span><span class="counts-text block">Earn</span></div><div class="col-xs-4 text-center"><span class="counts block head-font txt-success"><span class="counter-anim">'+value.total_spend_points+'</span></span><span class="counts-text block">Spend</span></div></div><div class="clearfix"></div></div></div>');
                  });
                       
                      // pagination("organzation_list",res,page);


                    }                
                  }

                })
 
                           

                       
               }

        </script>
</body>
</body>
</html>
