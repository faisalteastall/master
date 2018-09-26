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
                                        <h5 class="txt-dark" id="org_name">
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
																<a href="organization_location" id="org_url">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span  id="total_locations"></span></span>
																		<span class="weight-500 uppercase-font block font-13 txt-light" >Total Location</span>
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
																<a href="" id="deal_url">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span id="total_deals">0</span></span>
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
                                        <div class="panel panel-default card-view pa-0 bg-grey">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid bg-defoult">
                                                            <div class="row">
																<a href="#">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span class="counter-anim">0</span></span>
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
																<a href="#">
																	<div class="col-xs-6 text-center data-wrap-left">
																		<span class="txt-light block counter"><span id="all_reviews">0</span></span>
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
                                                    <h6 class="panel-title txt-dark"> Location List</h6>
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
                                                <div class="panel-body row pa-0" id="organzation_locations">
                                                   	




                                                  


                                                    
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
              $('#organzation_locations').html('');
              var org_name='';
               var b = location.href.substring(location.href.indexOf("?")+1); 
               var id= parseInt(b);   
                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'org_id':id,'page':page},
                    method:'get',
                    url:'/utter/api/cud/get_locations',
                    success:function(res){

                    if($.trim(res.status)=='true'){ 
                    $('#total_locations').text(res.count);
                    $('#all_reviews').text(res.all_reviews);
                    $('#total_deals').text(res.total_active_deals);
                     result=res;
                     var i = 1;
                     $.each(res.data, function( key, value ) {
                        org_name=value.org_name;
                      // console.log(value);
                           if(value.user_name=='')
                        {
                            name='N/a';                           
                            
                        }
                        else{
                            name=value.user_name;                           
                            
                        }
                        if(value.address=='')
                        {
                             address='N/a';
                        }
                       else{                           
                            address=value.address;
                             
                        }
                        if(value.images=='')
                        {
                            src='img/utter-now.png';
                        } else{                           
                            src=value.images[0]['image_url'];
                             
                        }
                        $('#organzation_locations').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> <div class="profile-box card-view"> <div class="profile-cover-pic" style="background:url(img/loc.jpg);background-size: cover;"> <div class="profile-image-overlay"></div><div class="item-big"> <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide"> <ol class="carousel-indicators"> <li data-target="#carousel-example-captions-1" data-slide-to="0" class=""></li><li data-target="#carousel-example-captions-1" data-slide-to="1" class=""></li><li data-target="#carousel-example-captions-1" data-slide-to="2" class="active"></li><li data-target="#carousel-example-captions-1" data-slide-to="3" class=""></li></ol> <div id="listbox'+i+'" role="listbox" class="carousel-inner"></div></div></div><div class="dropdown pull-right p-a-1"> <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle mt-0 btn-xs" type="button">Action &nbsp; <i class="fa fa-caret-down"></i></button> <ul role="menu" class="dropdown-menu "> <li><button title="Delete" class="btn btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button></li></ul> </div></div><div class="profile-info text-center"> <div class="profile-img-wrap"> <img class="inline-block mb-10" src="'+src+'" alt="user"> </div><span class="font-16 weight-600">'+value.total_rating+'</span><sup><i class="fa fa-star txt-warning"></i></sup> <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">'+value.name+'</h5> <h6 class="block capitalize-font" style="min-height:100px;"> <i class="fa fa-map-marker font-14"></i> &nbsp; <span class="font-13">'+value.address+'</span> </h6> </div><div class="social-info"> <div class="row"> <div class="col-xs-6 text-center ne-hov "> <a href="location-visitor.php"> <span class="counts block head-font"><span class="counter-anim txt-success">0</span></span> <span class="counts-text block">Todays Visitor</span> </a> </div><div class="col-xs-6 text-center ne-hov bdr-left"> <a href="location-deals.php"> <span class="counts block head-font"><span class="counter-anim txt-success">'+value.active_deals+'</span></span><span class="counts-text block ">Active Deals</span></a></div><div class="clearfix"></div><div class="progress-anim mt-20"> <div class="progress"> <div class="progress-bar progress-bar-defoult wow animated progress-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="clearfix"></div><div class="col-xs-6 text-center ne-hov"> <a href="Purchasers-details.php"> <span class="counts block head-font"><span class="counter-anim txt-success">0</span></span> <span class="counts-text block">Deals Abated</span> </a> </div><div class="col-xs-6 text-center bdr-left ne-hov"> <a href="location-reviews.php"> <span class="counts block head-font"><span class="counter-anim txt-success">'+value.total_reviews+'</span></span> <span class="counts-text block">Rating / Reviews</span> </a> </div><div class="clearfix"></div><a href="location_detail?'+value.id+'" class="btn btn-primary btn-block btn-anim mt-30"><i class="fa fa-eye"></i><span class="btn-text">View More</span></a> </div></div></div></div>');
                            var arr = value.images;
                                var src1 = (arr == null)? '':'img/utter-now2.png'
                                console.log(arr );    
                                if(arr.length === 0) {
                                    $('ol').empty();
                                    $('#listbox'+i).append('<div class="item active"> <img src="'+src1+'" alt="First slide image" style="width:264px;height:200px;"></div></div></div></div>');
                                } else {
                                    //$('#listbox').html('');
                                    var c = 0 ;
                                    $.each(value.images, function() {                                     
                                        var classs = (c == 0) ? 'active' : '';
                                        var src1=(this['image_url']!='')?this['image_url']:'img/utter-now2.png'
                                        
                                        $('#listbox'+i).append('<div class="item '+classs+'"> <img src="'+src1+'" alt="First slide image" style="width:264px;height:200px;"></div></div></div></div>');
                                        c++ ;
                                    });
                                }

                            //}
                        i++;
                       });
 
                     $('#org_name').text(org_name);     
                       pagination("organzation_locations",res,page);

                    }                
                  }
                    
                }) ;

$('#org_url').attr('href',deal_url);
 $('#deal_url').attr('href','organization_deals?'+id+'');
               
               }

        </script>
</body>

</html>