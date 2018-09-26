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
                                        <h5 class="txt-dark">Dashboard</h5>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view pb-40">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Total Rating Data By User</h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="sow-num">4.0</div>
                                                    <div class="sow-box">
                                                        <img width="40" src="img/star.png" />
                                                        <img width="40" src="img/star.png" />
                                                        <img width="40" src="img/star.png" />
                                                        <img width="40" src="img/star.png" />
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Current Location</h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="sl-item">
                                                        <a href="current-location-detail.php">
                                                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img class="img-responsive img-circle" src="img/map.png" alt="avatar">
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Plot no A29/21 dlf phase 1 , Near Mega Mall Gurugram, Haryana - 122002</span><span></span></p>
                                                                <span class="block txt-grey font-12 capitalize-font">Latest Location report : Aug 10.2017</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="button-list">
                                                        <button data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-primary btn-outline fancy-button btn-0 btn-rounded">SWITCH LOCATION</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="organization_list">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class=" total_organizations "></span></span>
																		<span class="weight-500 uppercase-font block font-13">Total Organization</span>
																	</div>
																	<div class="col-xs-4 text-center txt-black data-wrap-right">
																		<i class="pe-7s-users data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="customer-list.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter "><span class="total_customers"></span></span>
																		<span class="weight-500 uppercase-font block">Total Customer</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-user data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="location-photos.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class="total_banners">0</span></span>
																		<span class="weight-500 uppercase-font block">Total Banner</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-photo data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="#">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class="total_locations">0</span></span>
																		<span class="weight-500 uppercase-font block">Total Location</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-map data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="organization-list.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class="todays_organizations"></span>0</span>
																		<span class="weight-500  uppercase-font block font-13">Today's Registered Organization</span>
																	</div>
																	<div class="col-xs-4 text-center txt-black data-wrap-right">
																		<i class="pe-7s-users data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="customer-list.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter "><span class="todays_customers"></span>0</span>
																		<span class="weight-500 uppercase-font block">Today's Registered Customer</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-user data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="organization-deals.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class="active_deals">0</span></span>
																		<span class="weight-500 uppercase-font block">Active Deals</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-shopbag data-right-rep-icon txt-success"></i>
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
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
																<a href="location.php">
																	<div class="col-xs-8 text-center data-wrap-left">
																		<span class="txt-success block counter"><span class="todays_locations">0</span></span>
																		<span class="weight-500 uppercase-font block">Today Added Location</span>
																	</div>
																	<div class="col-xs-4 text-center data-wrap-right">
																		<i class="pe-7s-map data-right-rep-icon txt-success"></i>
																	</div>
																</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Row -->

                                <!-- Row -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view panel-refresh">
                                            <div class="refresh-container">
                                                <div class="la-anim-1"></div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Todays Visitor</h6>
                                                </div>
                                                <div class="pull-right">
                                                    <a class="pull-left inline-block refresh">
                                                        <span class="txt-dark counter"><span class="todays_customers font-24">0 &nbsp; </span></span> Visitor Todays
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div id="chartContainer" style="height: 370px; max-width: 100%; margin: 0px auto;"></div>
                                                    <!-- <div id="e_chart_3" class="" style="height:294px;"></div> -->
                                                    <div class="label-chatrs mt-15">
                                                        <div class="inline-block mr-15">
                                                            <span class="clabels inline-block bg-green mr-5"></span>
                                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">planned</span>
                                                        </div>
                                                        <div class="inline-block">
                                                            <span class="clabels inline-block bg-light-green mr-5"></span>
                                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">actual</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Row -->

                            </div>

                            <!-- Footer -->
                            <?php include 'footer.php';?>
                                <!-- /Footer -->

                        </div>
                        <!-- /Main Content -->

        </div>
        <!-- /#wrapper -->

        <!-- JavaScript -->
     
        <?php include 'script.php';?>

            <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
            <script src="js/index.js"></script>
            <script>  
            console.log(sessionStorage.getItem('user'));
             console.log(sessionStorage.getItem('access_token')); 
             var path=window.location.origin+window.location.pathname;
             base_path=path.split('/admin')
             console.log(base_path[0]);           
                window.onload = function() {
    
                    var options = {
                        exportEnabled: true,
                        animationEnabled: true,

                        title: {
                            text: ""
                        },
                        data: [{
                            color: "rgba(110,117,238,1)",
                            type: "splineArea",
                            dataPoints: [{
                                y: 10
                            }, {
                                y: 6
                            }, {
                                y: 14
                            }, {
                                y: 12
                            }, {
                                y: 19
                            }, {
                                y: 14
                            }, {
                                y: 26
                            }, {
                                y: 10
                            }, {
                                y: 22
                            }]
                        }]
                    };
                    $("#chartContainer").CanvasJSChart(options);             

                   $.ajax({
                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),         
                     },
                    data:{'user_id':user.user_id},
                    method:'get',
                    url:'/utter/api/cud/get_admin_dashboard',
                    success:function(res){
                    if($.trim(res.status)=='true'){                      
                        $('.total_organizations').html(res.data.total_organizations);
                        $('.total_customers').html(res.data.total_customers);
                        $('.total_locations').html(res.data.total_locations);
                        $('.todays_customers').html(res.data.todays_customers);
                        $('.todays_customers').html(res.data.todays_customers);
                        $('.todays_locations').html(res.data.todays_locations);
                        $('.active_deals').html(res.data.active_deals);
                        $('.total_banners').html(res.data.total_banners);
                        //$('.total_organizations').addClass('counter-anim');
                        console.log(res.data);
                    }
                    }

                })
                }
                
              
            </script>
</body>

</html>