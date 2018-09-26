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
													<ol class="carousel-indicators">
													   <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
													   <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
													</ol>
													<div role="listbox" class="carousel-inner">
													   <div class="item active"> <img src="img/gallery/mock1.jpg" alt="First slide image"> </div>
													   <div class="item"> <img src="img/gallery/mock4.jpg" alt="Second slide image"> </div>
													</div>
												</div>
												<!-- END carousel-->
											</div>
										</div>
											
										<div class="col-md-9">
											<div class="product-detail-wrap">
												<div class="product-rating inline-block mb-10">
													<a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a>
												</div>
												<div class="average-review inline-block mb-10">&nbsp; <span class="review-count"> 4.5 </span> </div>
												<h4 class="mb-20 weight-500">The Dubai Fountain</h4>
												<div class="product-price head-font mb-30">75 Reviews &nbsp; 21 Photos</div>												
                                                <h6 class="panel-title txt-gray">Address</h6>
												<p class="mb-20">Fashion Parking - Dubai Mall، Sheikh Mohammed bin Rashid Boulevard - Dubai - United Arab Emirates</p>
												<div class="pull-left">
                                                    <button class="btn  btn-success btn-rounded btn-xs">11.3 kms</button>
												    <button class="btn  btn-primary btn-rounded btn-xs">Directions</button>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="pt-30">		
                                                    <h6 class="panel-title txt-gray">User Visited Today <span class="panel-title txt-success pull-right"><a href="">View All</div></span></h6>
													<div class="activity-thumbnail pt-20 gl">
														<a href=""><img width="60" class="img-circle" src="img/thumb-1.jpg"></a>
														<a href=""><img width="60" class="img-circle" src="img/thumb-2.jpg"></a>
														<a href=""><img width="60" class="img-circle" src="img/thumb-3.jpg"></a>
														<div class="layer-img"><a href="#">25+</a></div>
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
										<h6 class="panel-title txt-dark">Best deals near you</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											<div id="owl_demo_2" class="owl-carousel owl-theme">
											   <div class="item">
											   <img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
													</div>
												</div>
											   <div class="item">
											   <img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
													</div>
												</div>
											   <div class="item">
											   <img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
													</div>
												</div>
											   <div class="item">
											   <img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
													</div>
												</div>
											   <div class="item">
											   <img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
													</div>
												</div>
											   <div class="item"><img src="img/big/img1.jpg">
													<div class="product-detail-wrap">
														<div class="mb-15"></div>
														<h6 class="mb-10 weight-500">The Dubai Fountain (6min) + 1 Stuff Drink + 1 king burger</h6>
														<div class=" mb-10"> <span class="txt-success weight-600">AED 75.00 </span> &nbsp; <span class="txt-grey"><del>AED 75.00</del></span> &nbsp; <span class="txt-danger"> 30%off</span></div>
														<span class="block txt-dark weight-500 font-12 pt-5 mb-10"><i class="fa fa-square txt-warning font-16 mr-10 mb-10"></i> Get this deal by spending 999 points  </span>
														<div class="center">	
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default btn-number btn-xs " disabled="disabled" data-type="minus" data-field="quant[1]">
																		<span class="fa fa-minus"></span>
																	</button>
																</span>
																<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-number btn-xs" data-type="plus" onclick="Countnumber(event)" data-field="quant[1]">
																		<span class="fa fa-plus"></span>
																	</button>
																</span>
															</div>
														</div>
														<span class="block txt-grey weight-500 font-12 pt-5 uppercase-font pull-left">
															Valid On : MON - FRI
														</span>
														<button class="btn btn-primary btn-rounded btn-xs uppercase-font pull-right">Explore</button>
														
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
				<div class="row">
					   <div class="col-lg-12 mb-20">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Best deals near you</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>	
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body sm-data-box-1">
                                    <div class="sl-item">
                                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                <img class="img-responsive img-circle" src="img/thumb-1.jpg" alt="avatar">
                                            </div>
                                            <div class="sl-content">
                                                <p ><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Lorem ipsum dolor</span><span class="txt-grey font-12 capitalize-font pull-right">1 Day Ago </span></p>                                          
                                            	<span class="block txt-dark weight-500 font-15 pt-5">
													<i class="fa fa-star-half-empty txt-success font-20 mr-10 text-left"></i> 4.2
													
												</span>
												<div class="pull-left">
													<p class="block txt-dark font-13 capitalize-font pb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget </p>
												</div>
												<div class=" bg-gray">
													<p class="block txt-grey font-12 capitalize-font"> <button class="bt-btn btn-xs"><i class="fa fa-thumbs-o-up"></i> &nbsp; Liks</button> &nbsp; &nbsp; <button class="bt-btn btn-xs"><i class="fa fa-thumbs-o-down"></i> &nbsp; Disliks</button> &nbsp; &nbsp; <button class="bt-btn btn-xs"><i class=" ti-face-smile"></i> &nbsp; Helpful</button> </p>
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
    </div>
    <!-- /#wrapper -->
    <?php include 'script.php';?>
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
			
		<!-- Owl Init JavaScript -->
		<script src="dist/js/owl-data.js"></script>
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

			
			
		</script>
</body>
</html>
