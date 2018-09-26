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
	<link href="vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
	<link href="vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
	<style>
	.owl-item{
		border-bottom:1px solid #c7c7c7;
		padding:10px 0px 20px 0px;
		margin-right: 15px !important;
	}
	.center{
		width: 200px;
	}
	.center input{
		height: 29px;
	}
	</style>
		
</head>

<body>
	<!--Preloader-->
	<?php include 'loader.php';?>
	<!--/Preloader-->
    <div class="wrapper theme-3-active pimary-color-green">
		<?php include 'nev.php';?>
        <?php include 'menu.php';?>
        <?php include 'r-slide.php';?>
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Location detail</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<div class="item-big">
												<!-- START carousel-->
												<div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
													<ol class="carousel-indicators" id="carousel">
													   
													</ol>
													<div role="listbox" class="carousel-inner" id="listbox">
													   
													</div>
												</div>
												<!-- END carousel-->
											</div>
										</div>
											
										<div class="col-md-9">
											<div class="product-detail-wrap">
												<div class="product-rating inline-block mb-10">
													
												</div>
												<div class="average-review inline-block mb-10">&nbsp; <span class="review-count"> 4.5 </span> </div>
												<h4 class="mb-20 weight-500" id="location_name"></h4>
												<div class="product-price head-font mb-30"><span id="review-count">0.0</span> Reviews &nbsp; <span id="image_count"></span> Photos</div>												
                                                <h6 class="panel-title txt-gray" >Address</h6>
												<p class="mb-20" id="address"></p>
                                                <!-- <h6 class="panel-title txt-gray">Discription</h6>
												<p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacinia dui. Fusce feugiat velit in lacus bibendum, vel maximus velit porta. Vivamus ornare</p> -->
											
                                                <h6 class="panel-title txt-gray">Opening Time</h6>
												<p class="mb-20 text-success"><span id="opening_time"></span> to <span id="closing_time"></span></p>
											
                                                <div class="clearfix"></div>
                                                <div class="pt-30">		
                                                    <h6 class="panel-title txt-gray">User Visited Today <span class="panel-title txt-success pull-right"></div></span></h6>
													<div class="activity-thumbnail pt-20 gl">
														
														<div class="layer-img"><a href="#" id="layer-img"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Row -->
				
				<!-- Row -->
				<div class="row">
					   <div class="col-lg-12 mb-20">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Deals</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							
							</div>	
						</div>
						</div>
						<div class="panel-wrapper collapse in">
						<div id="deal_list" class="panel-body row pa-0">
                          </div>                                                           
                        </div>	
					<!-- /Row -->
					<div class="row">
					   <div class="col-lg-12 mb-20">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Reviews/Ratings</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>	
						</div>
					<div  id="review_list">
                        
					</div>
					



					<div class="clearfix"></div>
                    <!-- <ul class="pagination pagination-sm mt-10 mb-15 mr-15 pull-right">
                        <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                        <li> <a href="#">1</a> </li>
                        <li class="active"> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">4</a> </li>
                        <li> <a href="#">5</a> </li>
                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                    </ul>  -->
                    </div>
					<!-- /Row -->
			</div>
			
			<?php include 'footer.php';?>
			
        </div>
    </div>
    <!-- /#wrapper -->
    <?php include 'script.php';?>
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
			
		<!-- Owl Init JavaScript -->
		<script src="dist/js/owl-data.js"></script>
		<script src="js/index.js"></script>
		<script>
			$(document).ready(function(){
				var owl = $(".owl-carousel");
				owl.owlCarousel({
					items: 1,
					autoplay: true,
					autoPlaySpeed: 5000,
					autoPlayTimeout: 5000,
					autoplayHoverPause: true
				});
			});
					
			

				function Countnumber(e){
					e.preventDefault();
				
				fieldName = $(this).attr('data-field');
				type      = $(this).attr('data-type');
				var input = $("input[name='"+fieldName+"']");
				var currentVal = parseInt(input.val());
				if (!isNaN(currentVal)) {
					if(type == 'minus') {
						
						if(currentVal > input.attr('min')) {
							input.val(currentVal - 1).change();
						} 
						if(parseInt(input.val()) == input.attr('min')) {
							$(this).attr('disabled', true);
						}

					} else if(type == 'plus') {

						if(currentVal < input.attr('max')) {
							input.val(currentVal + 1).change();
						}
						if(parseInt(input.val()) == input.attr('max')) {
							$(this).attr('disabled', true);
						}

					}
				} else {
					input.val(0);
				}

				}


			$('.btn-numberw').click(function(e){
				e.preventDefault();
				
				fieldName = $(this).attr('data-field');
				type      = $(this).attr('data-type');
				var input = $("input[name='"+fieldName+"']");
				var currentVal = parseInt(input.val());
				if (!isNaN(currentVal)) {
					if(type == 'minus') {
						
						if(currentVal > input.attr('min')) {
							input.val(currentVal - 1).change();
						} 
						if(parseInt(input.val()) == input.attr('min')) {
							$(this).attr('disabled', true);
						}

					} else if(type == 'plus') {

						if(currentVal < input.attr('max')) {
							input.val(currentVal + 1).change();
						}
						if(parseInt(input.val()) == input.attr('max')) {
							$(this).attr('disabled', true);
						}

					}
				} else {
					input.val(0);
				}
			});
			$('.input-number').focusin(function(){
			$(this).data('oldValue', $(this).val());
			});
			$('.input-number').change(function() {
				
				minValue =  parseInt($(this).attr('min'));
				maxValue =  parseInt($(this).attr('max'));
				valueCurrent = parseInt($(this).val());
				
				name = $(this).attr('name');
				if(valueCurrent >= minValue) {
					$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
				} else {
					alert('Sorry, the minimum value was reached');
					$(this).val($(this).data('oldValue'));
				}
				if(valueCurrent <= maxValue) {
					$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
				} else {
					alert('Sorry, the maximum value was reached');
					$(this).val($(this).data('oldValue'));
				}
				
				
			});
			$(".input-number").keydown(function (e) {
					// Allow: backspace, delete, tab, escape, enter and .
					if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
						// Allow: Ctrl+A
						(e.keyCode == 65 && e.ctrlKey === true) || 
						// Allow: home, end, left, right
						(e.keyCode >= 35 && e.keyCode <= 39)) {
							// let it happen, don't do anything
							return;
					}
					// Ensure that it is a number and stop the keypress
					if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
						e.preventDefault();
					}
				});

            var b = location.href.substring(location.href.indexOf("?")+1); 
            var id= parseInt(b); 
            location_detail();
				
			function location_detail(page=1){ 
                var result;
              $('#user_details').html('');
            
                      
                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'location_id':id},
                    method:'get',
                    url:'/utter/api/cud/get_location_detail',
                    success:function(res){
                    if($.trim(res.status)=='true'){                
                   $('#location_name').text(res.data[0].name);
                   $('#review-count').text(res.data[0].review);
                   $('#image_count').text(res.data[0].location_images.length);
                   $('#address').append(res.data[0].address);
                   if(res.data[0].rating!==null){    
                   $('.review-count').text(res.data[0].rating);
                        }
                   else{
                   	$('.review-count').text('0.0');

                        }
                    var index=Math.ceil(res.data[0].rating);
                   var opening_time=moment(res.data[0].opening_time,'HH:mm').format('hh:mm A');
                   var closing_time=moment(res.data[0].closing_time,'HH:mm').format('hh:mm A');
                   $('#opening_time').text(opening_time);
                   $('#closing_time').text(closing_time);                             	
                  
                   if(res.data[0].rating % 1===0){
                   	var cls='zmdi-star';
                   }
                   else{
                   		var cls='zmdi-star-half';
                   }
              
                   $('.product-rating').append('<a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a>');
                    var $links = $('.product-rating a');	
                    if((res.data[0].rating!==null) && (res.data[0].rating!=='0.0')){       				
					$links.eq($links.index(this)+index).removeClass('zmdi-star-outline');
					$links.eq($links.index(this)+index).addClass(cls);
					for (var i=1; i<index; i++) {
					$links.eq($links.index(this)+i).removeClass('zmdi-star-outline');
					$links.eq($links.index(this)+i).addClass('zmdi-star');
					}
				}
					
					if(res.data[0].location_visitor.length!==0){
						$.each(res.data[0].location_visitor.slice(0,3), function( key, value ) {	
						
					if(value.user_image=='')
                        {
                            src='img/utter-now.png';
                        } else{                           
                            src=value.image_url;
                             
                        }
					$('.layer-img').before('<a href=""><img width="60" height="60" class=" visitor_image img-circle" src="'+src+'"  alt="visitor_image" title="'+value.user_name+'"></a>');

				               });
							if(res.data[0].location_visitor.length<3){		
						$('.layer-img').addClass('hidden');
					        }
					        else{
					  $('#layer-img').text((res.data[0].location_visitor.length-3)+"+");
					    }
					   
				   }
				   else{
				   	$('#layer-img').text('N/a');
				   }
				   var i=0;
				   if(res.data[0].location_images.length){
				    $.each(res.data[0].location_images,function(key1,value1){
				    	 var classs = (i == 0) ? 'active' : '';
				    	$('#carousel').append('<li data-target="#carousel-example-captions-1" data-slide-to="'+(i++)+'" class="'+classs+'"></li>');
                     $('#listbox').append('<div class="item '+classs+'"> <img src="'+value1.image_url+'" alt="First slide image" style="width:275px;height:298px;"> </div>');

				    })
				   }
				   else{
				   	$('#carousel').append('<li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>');
                     $('#listbox').append('<div class="item active"> <img src="img/utter-now2.png" alt="First slide image" style="width:275px;height:298px;"> </div>');
				   }
					
                      // pagination("organzation_list",res,page);


                    }                
                  }

                })                           

                       
               }
               ajax();
               getReviews();
             function ajax(page=1){                
              $('#deal_list').html('');              
               var b = location.href.substring(location.href.indexOf("?")+1); 
               var id= parseInt(b);   
               $.ajax({
                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'location_id':id,'page':page,'perpage':4},
                    method:'get',
                    url:'/utter/api/cud/get_deals',
                    success:function(res){                 
                    if(($.trim(res.data.length))!==0){                  	
							var org_name='';
							var i = 1;
                     $.each(res.data, function( key, value ) {
                        org_name=value.org_name;                      
                        if(value.user_name==''||value.user_address==''||value.user_image=='')
                        {
                            name='N/a';
                            address='N/a';
                            src='img/logo-lg.png';
                        }
                        else
                        {
                            name=value.user_name;
                            address=value.user_address;
                            src=value.user_image;

                        }                       
                        var current_price=Math.ceil(value.price - (value.price * (value.discount / 100)));
						var s_date=moment(value.start_date).format('DD-MMM-YY');
						var e_date=moment(value.end_date).format('DD-MMM-YY');
                        $('#deal_list').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="profile-box card-view"> <div class="profile-cover-pic" style="background:url(img/deals.jpg);background-size: cover;"> <div class="item-big"> <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide"> <ol class="carousel-indicators"> <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li><li data-target="#carousel-example-captions-1" data-slide-to="1"></li><li data-target="#carousel-example-captions-1" data-slide-to="2"></li><li data-target="#carousel-example-captions-1" data-slide-to="3"></li></ol> <div id="listbox'+i+'" role="listbox" class="carousel-inner"></div></div></div></div><div class="clearfix"></div><div class="profile-info text-center mt-15">  <h5 class="block mb-5 weight-500 capitalize-font txt-success">'+value.name+'</h5><p style="height:55px;">'+value.description+'</p> </div><div class="social-info"> <div class="row"> <div class="product-detail-wrap"> <div class=" mb-10"> <span class="txt-success weight-600">$'+current_price+' </span> &nbsp; <span class="txt-grey"><del>$'+value.price+'</del></span> &nbsp; <span class="txt-danger"> '+value.discount+'%off</span></div><span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> To purchase this deal, user has to spend '+value.redeem_points+' points </span> <span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left" style="margin-bottom: 20px;"> Valid On : <span class="text-primary">'+s_date+' to '+e_date+'</span> </span><button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-left disabled">Active</button><button class="btn btn-danger btn-rounded btn-xs uppercase-font pull-right disabled" ">Deactive</button> </div><div class="clearfix"></div><div class="progress-anim mt-20"> <div class="progress"> <div class="progress-bar progress-bar-defoult wow animated progress-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="clearfix"></div><div class="col-xs-6 text-center ne-hov "> <a href="purchasers-details.php"> <span class="counts block head-font"><span class="counter-anim txt-success">'+value.deal_bought+'</span></span> <span class="counts-text block">No of Sale</span> </a> </div><div class="col-xs-6 text-center ne-hov bdr-left"> <a href="location-reviews.php"> <span class="counts block head-font"><span class="counter-anim txt-success">0</span></span> <span class="counts-text block ">Likes</span> </a> </div><div class="clearfix"></div></div></div></div></div>');
                             var arr = value.deal_image;
                             if(arr.length === 0){
                              $('ol').empty();
                                     }                              
                                   var c = 0 ;
                                  $.each(value.deal_image, function() { 
                                     var classs = (c == 0) ? 'active' : '';
                                    $('#listbox'+i).append('<div class="item active"> <img src="'+this['image_url']+'" alt="First slide image" style="width:264px;height:200px;width: 100%;"></div></div></div></div>');
                                   });                              
                            
                               i++;   
                       });                    
                       if(res.count!==0){
                       pagination("deal_list",res,page);
                        }
                        else{
                     	$('#deal_list').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><p>No deals found</p><br></div>');
                     }  
                     }
                  }

                })
                       
               }

             function getReviews(page=1){                
              $('#review_list').html('');              
               var b = location.href.substring(location.href.indexOf("?")+1); 
               var id= parseInt(b);   
               $.ajax({
                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'location_id':id,'page':page,'perpage':4},
                    method:'get',
                    url:'/utter/api/cud/get_review',
                    success:function(res){                 
                    if(($.trim(res.data.length))!=='0'){                  	
							var org_name='';
							var i = 1;
                     $.each(res.data, function( key, value ) {
                        org_name=value.org_name;                      
                        if(value.user_name==''||value.user_address==''||value.user_image=='')
                        {
                            name='N/a';
                            address='N/a';
                            src='img/logo-lg.png';
                        }
                        else
                        {
                            name=value.user_name;
                            address=value.user_address;
                            src=value.user_image;

                        }   
                       var date=moment(value.review_date).fromNow();    
                       if(value.likes!=='0')
                       {
                       	var color='color: rgb(15, 79, 140)';
                       } 
                       else{
                       	var color='';
                       }   
                       if(value.dislikes!=='0')
                       {
                       	var dcolor='color: rgb(140, 61, 15)';
                       } 
                       else{
                       	var dcolor='';
                       }   
                       if(value.helpful!=='0')
                       {
                       	var hcolor='color: rgb(164, 167, 9)';
                       } 
                       else{
                       	var hcolor='';
                       }             
                          var img_str =value.image_url;
                          var images = img_str.substring(37, 38);
                          if(images==='')
                          {
                           var src='img/utter-now.png';
                          }
                          else{
                          	var src=value.image_url;

                          }
                        $('#review_list').append('<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><div class="panel panel-default card-view"> <div class="panel-wrapper collapse in"> <div class="panel-body sm-data-box-1"> <div class="sl-item"> <div class="sl-avatar avatar avatar-sm avatar-circle"> <img class="img-responsive img-circle" src="'+src+'" alt="avatar"> </div><div class="sl-content"> <p ><span class="capitalize-font txt-success mr-5 weight-500 pt-0">'+value.review_by+'</span><span class="txt-grey font-12 capitalize-font pull-right">'+date+'</span></p><span class="block txt-dark weight-500 font-15 pt-5"><i class="fa fa-star-half-empty txt-success font-20 mr-10 text-left"></i> '+value.rating+'.0</span><div class="pull-left"><p class="block txt-dark font-13 capitalize-font pb-15" style="min-width: 198px;min-height: 190px;">'+value.review+'</p></div><div class=" bg-gray"><p class="block txt-grey font-12 capitalize-font"> <button class="bt-btn btn-xs" style="'+color+'"><i class="fa fa-thumbs-o-up"></i> &nbsp; Liks <span>'+value.likes+'</span></button> &nbsp; &nbsp; <button class="bt-btn btn-xs" style="'+dcolor+'"><i class="fa fa-thumbs-o-down"></i> &nbsp; Disliks <span>'+value.dislikes+'</span></button> &nbsp; &nbsp; <button class="bt-btn btn-xs" style="'+hcolor+'"><i class=" ti-face-smile"></i> &nbsp; Helpful <span>'+value.helpful+'</span></button> </p></div></div></div></div></div></div></div>');                            
                       });                    
                       // if(res.length){
                       pagination("review_list",res,page,"getReviews");
                        // }                        
                     }
                     else{
                     	$('#review_list').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><p>No Reviews Found</p><br></div>');
                     }  
                  }

                })
                       
               }
			
		</script>
</body>
</html>
