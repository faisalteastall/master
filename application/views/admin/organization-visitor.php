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
    <link href="vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .pointer {
            cursor:pointer;
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
                                        <h5 class="txt-dark">Organization Name <span class="pull-right">
                                        <div class="form-group" style="max-width: 250px;">
                                                <div class="input-group">                                                        
                                                    <input type="text" class="form-control" id="exampleInputuname_1" placeholder="search..">
                                                    <div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    </div>
                                                </div>
                                        </span></h5>
                                    </div>
                                </div>
                                <!-- Row -->
                                <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0 bg-grey">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="organization-location.php">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Total Location</span>
																	</div>
																	<div class="col-xs-6 text-center txt-black data-wrap-right">
																		<i class="pe-7s-map data-right-rep-icon txt-light"></i>
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
																<a href="organization-deals.php">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Active Deals</span>
																	</div>
																	<div class="col-xs-6 text-center txt-black data-wrap-right">
																		<i class="pe-7s-shopbag data-right-rep-icon txt-light"></i>
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
                                        <div class="panel panel-default card-view pa-0 bg-primary">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="organization-visitor.php">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Today's Visitor</span>
																	</div>
																	<div class="col-xs-6 text-center txt-black data-wrap-right">
																		<i class="pe-7s-users data-right-rep-icon txt-light"></i>
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
																<a href="organization-rating.php">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">25</span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light">Rating / Reviews</span>
																	</div>
																	<div class="col-xs-6 text-center txt-black data-wrap-right">
																		<i class="pe-7s-chat data-right-rep-icon txt-light"></i>
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
                                                    <h6 class="panel-title txt-dark"> Visitor List</h6>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                                        <i class="zmdi zmdi-replay"></i>
                                                    </a>
                                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                                        <i class="zmdi zmdi-fullscreen"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body row pa-0" id="organization_visitor">
                                                    




                                                   
                                                    	

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

                               

                            </div>
                            <?php include 'footer.php';?>
                        </div>

        </div>

        <?php include 'script.php';?>
        <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="js/index.js"></script>
        <script>
            $(document).ready(function () {
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elems.forEach(function(html) {
            var switchery = new Switchery(html);
            });

            });
            document.addEventListener("change", function(event) {
            let element = event.target;
            if (element && element.matches(".form-element-field")) {
                element.classList[element.value ? "add" : "remove"]("-hasvalue");
            }
            });
             ajax();             
            function ajax(page=1){                
              $('#organization_visitor').html('');
              
               var b = location.href.substring(location.href.indexOf("?")+1); 
               var id= parseInt(b);   
                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'org_id':id,'page':page},
                    method:'get',
                    url:'/utter/api/cud/get_visitors',
                    success:function(res){

                    if($.trim(res.status)=='true'){ 
                    $('#total_locations').text(res.count);
                    $('#all_reviews').text(res.all_reviews);
                    $('#total_deals').text(res.total_active_deals);
                     result=res;
                     var i = 1;
                     $.each(res.data, function( key, value ) {
                      // console.log(value);
                        if(value.user_name==''||value.user_address==''||value.user_image=='')
                        {
                            name='N/a';
                            address='N/a';
                            src='img/logo-lg.png';
                        }
                        else{
                            name=value.user_name;
                            address=value.user_address;
                             src=value.user_image;

                        }
                        $('#organization_visitor').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> <div class="profile-box card-view"> <div class="profile-cover-pic" style="background:url(img/pr.jpg);"> <div class="profile-image-overlay"></div></div><div class="profile-info text-center"> <div class="profile-img-wrap"> <img class="inline-block mb-10" src="img/avatar.jpg" alt="user"/> </div><h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">Name</h5> <h6 class="block capitalize-font"> <i class="fa fa-phone font-14"></i> &nbsp; <span class="font-13">9700025000 </span> </h6> </div><div class="social-info"> <div class="row"> <div class="col-xs-6 text-center "> <span class="counts block head-font"><span class="counter-anim txt-success">5</span></span> <span class="counts-text block">Deals Bought </span> </div><div class="col-xs-6 text-center bdr-left"> <span class="counts block head-font"><span class="counter-anim txt-success">16</span></span> <span class="counts-text block ">Location Visit</span> </div><div class="clearfix"></div><div class="progress-anim mt-20"> <div class="progress"> <div class="progress-bar progress-bar-defoult wow animated progress-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="clearfix"></div><div class="col-xs-6 text-center"> <span class="counts block head-font"><span class="counter-anim txt-success">2</span></span> <span class="counts-text block">Photos Added</span> </div><div class="col-xs-6 text-center bdr-left"> <span class="counts block head-font"><span class="counter-anim txt-success">98</span></span> <span class="counts-text block">Rating / Reviews</span> </div><div class="clearfix"></div><a href="user-details.php" class="btn btn-primary btn-block btn-anim mt-30"><i class="fa fa-eye"></i><span class="btn-text">View More</span></a> </div></div></div></div>');
                           
                           
                       });
                       pagination("organization_visitor",res,page);

                    }                
                  }
                    
                }) ;

// $('#org_url').attr('href',deal_url);
//  $('#deal_url').attr('href','organization_deals?'+id+'');
       
                       
               }
        </script>
</body>

</html>