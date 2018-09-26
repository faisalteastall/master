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
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <h5 class="txt-dark">Filter   
                                        <span class="pull-right"></span></h5>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                        <ol class="breadcrumb">
                                            <div class="btn-group">
												<div class="dropdown">
												<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary btn-outline fancy-button dropdown-toggle mt-0 btn-xs" type="button">Other &nbsp; <i class="fa fa-caret-down"></i></button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="#">categories</a></li>
                                                        <li><a href="#">categories</a></li>
                                                        <li><a href="#">categories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-0 btn-xs">categories</button>
                                            <button class="btn btn-primary btn-outline fancy-button btn-0 mt-0 btn-xs">categories</button>
                                            <button class="btn btn-primary btn-outline fancy-button btn-0 mt-0 btn-xs">categories</button>
                                            </ol>
                                        </div>
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
                                                    <h6 class="panel-title txt-dark">Organization List</h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body row pa-0" id="organzation_list">
                                                 	



                                                  
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
                var result;
              $('#organzation_list').html('');


                $.ajax({

                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id,'page':page},
                    method:'get',
                    url:'/utter/api/cud/organzation_list',
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
                        if(value.user_image=='')
                        {
                            src='img/utter-now.png';
                        }
                       else{                           
                             src=value.user_image;
                             
                        }
                                             
                      $('#organzation_list').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"><div class="profile-box card-view"><div class="profile-cover-pic"><div class="profile-image-overlay"></div><div class="dropdown pull-right"><button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle mt-0 btn-xs" type="button">Action  &nbsp; <i class="fa fa-caret-down"></i></button><ul role="menu" class="dropdown-menu "><li><button data-toggle="modal" data-target="#editModal'+value.user_id+'" data-whatever="@mdo" title="Edit" class="btn btn-default btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></li><li><button data-toggle="modal" data-target="#viewModal'+value.user_id+'" data-whatever="@mdo" title="View" class="view btn  btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></li><li><button title="Delete" class="btn  btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button></li></ul></div></div><div class="profile-info text-center"><div class="profile-img-wrap"><img class="inline-block mb-10" src="'+src+'" alt="user"></div><span class="font-16 weight-600">'+value.total_rating+'</span><sup><i class="fa fa-star txt-warning"></i></sup><h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">'+name+'</h5><h6 class="block capitalize-font"><i class="fa fa-map-marker font-14" style="min-height: 100px;"></i> &nbsp;  <span class="font-13">'+address+'</span></h6></div><div class="social-info"><div class="row"><div class="col-xs-6 text-center ne-hov "><a href="organization_location?'+value.user_id+'"><span class="counts block head-font"><span class="counter-anim txt-success">'+value.total_locations+'</span></span><span class="counts-text block">Total Location</span></a></div><div class="col-xs-6 text-center ne-hov bdr-left"><a href="organization_deals?'+value.user_id+'"><span class="counts block head-font"><span class="counter-anim txt-success">'+value.active_deals+'</span></span><span class="counts-text block ">Active Deals</span></a></div><div class="clearfix"></div><div class="progress-anim mt-20"><div class="progress"><div class="progress-bar progress-bar-defoult wow animated progress-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div></div><div class="clearfix"></div><div class="col-xs-6 text-center ne-hov"><a href="organization-visitor.php"><span class="counts block head-font"><span class="counter-anim txt-success">'+value.todays_visitor+'</span></span><span class="counts-text block">Todays Visitor</span></a></div><div class="col-xs-6 text-center bdr-left ne-hov"><a href="organization-rating.php"><span class="counts block head-font"><span class="counter-anim txt-success">'+value.total_reviews+'</span></span><span class="counts-text block">Rating / Reviews</span></a></div><div class="clearfix"></div></div></div></div></div>'); 
                      $('.container-fluid').append(' <div class="modal fade" id="editModal'+value.user_id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header bg-primary"> <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Organizer</h5> </div><div class="modal-body"> <form> <div class="form-element form-input"> <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Organizer Name" type="input" required value="Name"/> <div class="form-element-bar"></div><label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Organizer Name</label> </div><div class="form-element form-input"> <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Mobile No" type="input" required value="2582582582"/> <div class="form-element-bar"></div><label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Mobile No</label> </div><div class="form-element form-input"> <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Email ID" type="input" required value="Name@gmail.com"/> <div class="form-element-bar"></div><label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Email ID</label> </div><div class="form-element form-input"> <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Address" type="input" required value="Address Address Address Address Address"/> <div class="form-element-bar"></div><label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Address</label> </div><label class="pointer">Status<br><input type="checkbox" value="" class="js-switch" checked> </label> <div class="mt-40"> <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="vendors/bower_components/dropify/src/images/test-image-2.jpg"/> </div></form> </div><div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Enter</button> </div></div></div></div><div class="modal fade" id="viewModal'+value.user_id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header bg-primary"> <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h5 class="modal-title txt-light" id="exampleModalLabel1">View Organizer Details</h5> </div><div class="modal-body"> <div class="profile-box"> <div class="profile-cover-pic"> <div class="profile-image-overlay"></div></div><div class="profile-info text-center"> <div class="profile-img-wrap"> <img class="inline-block mb-10" src="img/mock1.jpg" alt="user"/> </div><h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">'+value.user_name+'</h5> <h6 class="block capitalize-font"> <i class="fa fa-envelope font-14"></i> &nbsp; <span class="font-13">'+value.user_email+'</span> <br><i class="fa fa-phone font-14"></i> &nbsp; <span class="font-13">'+value.user_mobile+'</span> <br><i class="fa fa-map-marker font-14"></i> &nbsp; <span class="font-13">'+value.user_address+'</span> </h6> </div><div class="social-info"> <div class="button-list"> <button class="btn btn-Defolt btn-block mt-20"><span class="btn-text">Desable</span></button> <button class="btn btn-primary btn-block mt-20"><span class="btn-text">Enable</span></button> </div></div></div></div></div></div></div>');
                  });
                       
                       pagination("organzation_list",res,page);


                    }                
                  }

                })
 
                           

                       
               }
       
        </script>
</body>

</html>