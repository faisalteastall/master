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
    <script type="text/javascript" src="vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
	<link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

    <link href="vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <style>
        .pointer {
            cursor:pointer;
        }
        .dropdown-menu{
           min-width:auto;
        }
        .p-a-1{
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <?php include 'loader.php';?>
        <!-- /Preloader -->
        <div class="wrapper  theme-3-active pimary-color-green">
            <?php include 'nev.php';?>
                <?php include 'menu.php';?>
                    <?php include 'r-slide.php';?>

                        <div class="right-sidebar-backdrop"></div>
                        <div class="page-wrapper">
                            <div class="container-fluid">

                                <div class="row heading-bg">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                        <h5 class="txt-dark">Loyalty Points
                                        <span class="pull-right">
                                            <div class="form-group" style="max-width: 250px;">
                                                <div class="input-group">                                                        
                                                    <input type="text" class="form-control" id="exampleInputuname_1" placeholder="search..">
                                                    <div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0 bg-primary">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="loyalty-points.php">
																	<div class="col-xs-9 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25555</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Total Points Generated</span>
																	</div>
																	<div class="col-xs-3 text-center txt-black data-wrap-right">
																		<i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
																	</div>
																</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0 bg-grey">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="total-redeem.php">
																	<div class="col-xs-9 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">250</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Total Redeem points</span>
																	</div>
																	<div class="col-xs-3 text-center txt-black data-wrap-right">
																		<i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
																	</div>
																</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0 bg-grey">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="points-generated.php">
																	<div class="col-xs-9 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Today's Points Generated</span>
																	</div>
																	<div class="col-xs-3 text-center txt-black data-wrap-right">
																		<i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
																	</div>
																</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0 bg-grey">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="points-value.php">
																	<div class="col-xs-9 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Point value</span>
																	</div>
																	<div class="col-xs-3 text-center txt-black data-wrap-right">
																		<i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
																	</div>
																</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view panel-refresh">
                                            <div class="refresh-container">
                                                <div class="la-anim-1"></div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Generated Point History</h6>
                                                </div>
                                                <div class="pull-right">
                                                <div class="pull-right" style="max-width: 250px;">
                                                        <div class="input-group">                                                        
                                                            <input type="text" class="form-control" id="exampleInputuname_1" placeholder="search..">
                                                            <div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pull-right mr-5">
                                                        <div class="form-group">
															<select class="form-control">
																<option selected value="">All</option>
																<option value="">Ratting / Review</option>
																<option value="">Image Upload</option>
																<option value="">Referral</option>
															</select>
														</div>                                                        
                                                    </div>
                                                    <div class="pull-right" style="max-width: 250px;">
                                                        <div class="form-group mb-0 mr-5">
                                                            <input id="datetimepicker2" class="form-control input-daterange-datepicker" type="text" name="daterange" value="Select date to date"/>
                                                        </div>
													</div>
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body row pa-0">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="panel panel-default card-view">
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body sm-data-box-1">
                                                                    <div class="sl-item">
                                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                            <img class="img-responsive img-circle" src="img/avatar.jpg" alt="avatar">
                                                                        </div>
                                                                        <div class="sl-content">
                                                                            <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Name <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> 40 </span></span></p>                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <p class="block txt-dark font-13 capitalize-font"><span class="font-16 text-success">Reason  &nbsp; </span><span class="font-14 text-grey pull-right"> Ratting / Review</span>  </p>
                                                                        <p class="block txt-dark font-13 capitalize-font pb-15"><span class="font-16 text-success"><i class="fa fa-map-marker"></i>  &nbsp; </span> Plot no A29/21 dlf phase 1, UAE  </p>
                                                               
                                                                    <div class="clearfix"></div>
                                                                    <div class=" bg-gray">
                                                                        <p class="block txt-grey font-12 capitalize-font  ">Date &nbsp; 12 Dec 2018 12:21 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="panel panel-default card-view">
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body sm-data-box-1">
                                                                    <div class="sl-item">
                                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                            <img class="img-responsive img-circle" src="img/avatar.jpg" alt="avatar">
                                                                        </div>
                                                                        <div class="sl-content">
                                                                            <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Name <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> 40 </span></span></p>                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <p class="block txt-dark font-13 capitalize-font"><span class="font-16 text-success">Reason  &nbsp; </span><span class="font-14 text-grey pull-right"> Ratting / Review</span>  </p>
                                                                        <p class="block txt-dark font-13 capitalize-font pb-15"><span class="font-16 text-success"><i class="fa fa-map-marker"></i>  &nbsp; </span> Plot no A29/21 dlf phase 1, UAE </p>
                                                                
                                                                    <div class="clearfix"></div>
                                                                    <div class=" bg-gray">
                                                                        <p class="block txt-grey font-12 capitalize-font  ">Date &nbsp; 12 Dec 2018 12:21 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="panel panel-default card-view">
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body sm-data-box-1">
                                                                    <div class="sl-item">
                                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                            <img class="img-responsive img-circle" src="img/avatar.jpg" alt="avatar">
                                                                        </div>
                                                                        <div class="sl-content">
                                                                            <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Name <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> 40 </span></span></p>                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <p class="block txt-dark font-13 capitalize-font"><span class="font-16 text-success">Reason  &nbsp; </span><span class="font-14 text-grey pull-right"> Ratting / Review</span>  </p>
                                                                        <p class="block txt-dark font-13 capitalize-font pb-15"><span class="font-16 text-success"><i class="fa fa-map-marker"></i>  &nbsp; </span> Plot no A29/21 dlf phase 1, UAE </p>
                                                                    
                                                                    <div class="clearfix"></div>
                                                                    <div class=" bg-gray">
                                                                        <p class="block txt-grey font-12 capitalize-font  ">Date &nbsp; 12 Dec 2018 12:21 </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="clearfix"></div>
                                                    <ul class="pagination pagination-sm mt-10 mb-15 mr-15 pull-right">
                                                        <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                                                        <li> <a href="#">1</a> </li>
                                                        <li class="active"> <a href="#">2</a> </li>
                                                        <li> <a href="#">3</a> </li>
                                                        <li> <a href="#">4</a> </li>
                                                        <li> <a href="#">5</a> </li>
                                                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                                                    </ul>                                                   
                                                </div>	
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>	
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Organizer Location Details</h5>
                                            </div>
                                            <div class="modal-body">
                                            <form>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Organizer Location" type="input" required value="Address Address Address Address Addres"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Organizer Location</label>
                                            </div>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Mobile No" type="input" required value="2582582582"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Mobile No</label>
                                            </div>
                                            <div class="form-element form-select">
                                                <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                                                    <option disabled selected value="" class="form-select-placeholder"></option>
                                                    <option value="Rap">Rap</option>
                                                    <option value="Pop">Pop</option>
                                                </select>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Categories list</label>
                                            </div>

                                        </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">View Organizer Location Details</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="profile-box">
                                                    <div class="profile-cover-pic">                                                    
                                                        <div class="profile-image-overlay"></div>
                                                    </div>
                                                    <div class="profile-info text-center">
                                                        <div class="profile-img-wrap">
                                                            <img class="inline-block mb-10" src="img/mock1.jpg" alt="user"/>
                                                        </div>	
                                                        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">Name</h5>
                                                        <h6 class="block capitalize-font pb-20"><i class="fa fa-star txt-warning font-14"></i> &nbsp; <span class="font-16">4.3</span> &nbsp; | &nbsp; <i class="fa fa-phone font-14"></i> &nbsp;  <span class="font-13">9585858585</span></h6>
                                                    </div>	
                                                    <div class="social-info bg-hov">
                                                        <div class="row ">
                                                            <div class="col-xs-4 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                                                <span class="counts-text block pt-5">Total Visitor</span>
                                                            </div>
                                                            <div class="col-xs-4 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                                                <span class="counts-text block">Total Reviews</span>
                                                            </div>
                                                            <div class="col-xs-4 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                                                <span class="counts-text block">Today Visitor</span>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body sm-data-box-1">
                                                    <div class="sl-item">
                                                    <a href="location-detail.php">
                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                            <img class="img-responsive img-circle" src="img/map.png" alt="avatar">
                                                        </div>
                                                        <div class="sl-content">
                                                            <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Lorem ipsum dolor</span><span></span></p>
                                                            <span class="block txt-grey font-12 capitalize-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget </span>
                                                        </div>
                                                
                                                    </a>
                                                </div>
                                                    <div class="">
                                                        <div class="pull-left">
                                                            <span class="block txt-dark weight-500 font-15 pt-5">
                                                                <i class="fa fa-star-half-empty txt-success font-20 mr-10"></i> 4.2  | 24 &nbsp; <i class="fa fa-comments txt-success font-20 mr-10"></i> 
                                                            </span>
                                                        </div>
                                                        <div class="pull-right">
                                                            <button class="btn  btn-success btn-rounded btn-xs">11.3 kms</button>
													        <button class="btn  btn-primary btn-rounded btn-xs">Directions</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div> -->
                                <!-- /Row -->

                               

                            </div>
                            <?php include 'footer.php';?>
                        </div>

        </div>

        <?php include 'script.php';?>
       
		<script src="vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
		<script type="text/javascript" src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<script src="vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
	$('.input-daterange-datepicker').daterangepicker({
	  buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-info',
			cancelClass: 'btn-default'
	});
	$('.input-daterange-timepicker').daterangepicker({
		timePicker: true,
		format: 'MM/DD/YYYY h:mm A',
		timePickerIncrement: 30,
		timePicker12Hour: true,
		timePickerSeconds: false,
		buttonClasses: ['btn', 'btn-sm'],
		applyClass: 'btn-info',
		cancelClass: 'btn-default'
	});
	$('.input-limit-datepicker').daterangepicker({
		format: 'MM/DD/YYYY',
		minDate: '06/01/2015',
		maxDate: '06/30/2015',
		buttonClasses: ['btn', 'btn-sm'],
		applyClass: 'btn-info',
		cancelClass: 'btn-default',
		dateLimit: {
			days: 6
		}
	});
    </script>
</body>

</html>