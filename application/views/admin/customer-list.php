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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h5 class="txt-dark">All Customer <spaN CLASS="pull-right">
                                            <div class="form-group" style="max-width: 250px;">
                                                <div class="input-group">                                                        
                                                    <input type="text" class="form-control"  placeholder="search.." id="search">
                                                    <div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    </div>
                                                </div>
                                        </SPAN></h5>
                                       
                                    </div>
                                    <!-- /Breadcrumb -->
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view panel-refresh">
                                            <div class="refresh-container">
                                                <div class="la-anim-1"></div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Customer List</h6>
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
                                                <div class="panel-body row pa-0" id="customer_list">
                                                
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
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Customer</h5>
                                            </div>
                                            <div class="modal-body">
                                            <form>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Customer Name" type="input" required value="Name"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Customer Name</label>
                                            </div>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Mobile No" type="input" required value="2582582582"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Mobile No</label>
                                            </div>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Email ID" type="input" required value="Name@gmail.com"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Email ID</label>
                                            </div>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Address" type="input" required value="Address Address Address Address Address"/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Address</label>
                                            </div>
                                            <label class="pointer">Status<br>
                                                <input type="checkbox" value="" class="js-switch" checked> 
                                            </label>
                                            <div class="mt-40">
                                                <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="vendors/bower_components/dropify/src/images/test-image-2.jpg" />
                                            </div>                              

                                        </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Enter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">View Customer</h5>
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
                                                        <h6 class="block capitalize-font pb-20"><i class="fa fa-envelope font-14"></i> &nbsp; <span class="font-13">nishikanr@teastallstudio.com</span> <br> <i class="fa fa-mobile font-14"></i> &nbsp;  <span class="font-13">9585858585</span></h6>
                                                    </div>	
                                                    <div class="social-info">
                                                        <div class="row">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">345</span></span>
                                                                <span class="counts-text block">No of Location Visit</span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                                                <span class="counts-text block">No of Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class-"button-list">
                                                            <button class="btn btn-primary btn-block mt-30"><span class="btn-text"></span></button>
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
        <script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
		<script src="dist/js/form-file-upload-data.js"></script>
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
             ajax();             
              function ajax(page=1){                
              $('#customer_list').html('');
              
               //var b = location.href.substring(location.href.indexOf("?")+1); 
               //var id= parseInt(b);   
                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'page':page,'perpage':4},
                    method:'get',
                    url:'/utter/api/cud/get_customers',
                    success:function(res){
                   $('#total_locations').text(res.total_locations);

                    if(($.trim(res.data.length))!==0){ 
                   
                    // $('#all_reviews').text(res.all_reviews);
                    // $('#total_deals').text(res.count);
                     result=res;
                     var org_name='';
                      var i = 1;
                     $.each(res.data, function( key, value ) {
                       if(value.user_name==='')
                       {
                         var user_name='N/a';
                       }
                       else{
                        user_name=value.user_name;
                       }
                       if(value.user_mobile==='')
                       {
                         var user_mobile='N/a';
                       }
                       else{
                        user_mobile=value.user_mobile;
                       }
                        if(value.user_email==='')
                       {
                         var user_email='N/a';
                       }
                       else{
                        user_email=value.user_email;
                       }
                       if(value.user_image=='')
                        {
                            src='img/utter-now.png';
                            src1='img/utter-now2.png';
                        }
                       else{                           
                             src=value.image_url;
                             src1=value.image_url;
                             
                        }
                        
                        $('#customer_list').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 profile_list" id="profile_list'+value.user_id+'"> <div class="profile-box card-view" > <div class="profile-cover-pic" style="background:url('+src1+');"> <div class="profile-image-overlay"></div><div class="dropdown pull-right"> <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle mt-0 btn-xs" type="button">Action &nbsp; <i class="fa fa-caret-down"></i></button> <ul role="menu" class="dropdown-menu "> <li><button title="Delete" class="btn btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button></li></ul> </div></div><div class="profile-info text-center"> <div class="profile-img-wrap"> <img class="inline-block mb-10" src='+src+' alt="user"/> </div><h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">'+user_name+'</h5> <h6 class="block capitalize-font"> <i class="fa fa-phone font-14"></i> &nbsp; <span class="font-13">'+user_mobile+'</span> </h6> <h6 class="block capitalize-font"> <i class="fa fa-envelope-o font-14"></i> &nbsp; <span class="font-13">'+user_email+'</span> </h6> </div><div class="clearfix"></div><a href="user_details?'+value.user_id+'"  class="btn btn-primary btn-block btn-anim mb-20 mt-10"><i class="fa fa-eye"></i><span class="btn-text">View More</span></a> <div class="clearfix"></div></div></div>');
                          });
                   //  $('#org_name').text(res.org_name); 

                       pagination("customer_list",res,page);
                     }                
                  }

                })
 
                           

                       
               }
 // $('#deal_url').attr('href',location.href);
 // $('#location_url').attr('href','organization_location?'+id+'');
                           
// $('#search').on('keyup', function() {
//     var searchVal = $(this).val();
//  var numItems = $('.profile_list').length;
//   for(var j=0; j<numItems; j++){
//     // if ( searchVal != '' ) {
//     //      $(".profile_list").addClass('hidden');
//     //    // $("h5").parent().parent().addClass('hidden');
//          var div=$(" h5:contains("+searchVal.toLowerCase()+")").parent().parent().parent().attr('id');
//          //$("#"+div+"").removeClass('hidden');
//        console.log(div);
//     //      // $("#"+div+"").addClass('hidden');
  
//     // } else {
//     //      $(".profile_list").removeClass('hidden');
//     // }
// }
// });
               
        </script>
</body>

</html>