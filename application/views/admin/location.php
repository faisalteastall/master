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
    <style>
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

                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title" id="exampleModalLabel1">Add Location</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Type Your Location" type="input" required/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Search Location</label>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Enter</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <button id="setting_panel_btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" title="Add Location" class="btn btn-dropbox btn-icon-anim btn-circle font-24 weight-600 setting-panel-btn shadow-2dp"><i class="zmdi zmdi-plus"></i></button> -->
                        <div class="right-sidebar-backdrop"></div>
                        <div class="page-wrapper">
                            <div class="container-fluid">

                                <div class="row heading-bg">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h5 class="txt-dark">Total Registered location
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
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                    <div class="profile-box card-view">
                                        <div class="profile-cover-pic" style="background:url(img/loc.jpg);background-size: cover;">
                                            <div class="profile-image-overlay"></div>
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
                                                <div class="dropdown pull-right p-a-1">
                                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle mt-0 btn-xs" type="button">Action  &nbsp; <i class="fa fa-caret-down"></i></button>
                                                    <ul role="menu" class="dropdown-menu ">
                                                        <!-- <li><button data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" title="Edit" class="btn btn-default btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button></li>
                                                        <li><button data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo" title="View" class="btn  btn-primary btn-icon-anim btn-circle"><i class="fa fa-eye"></i></button></li> -->
                                                        <li><button title="Delete" class="btn  btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button></li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="profile-info text-center">
                                            <div class="profile-img-wrap">
                                                <img class="inline-block mb-10" src="img/bg-logo.jpg" alt="user"/>
                                            </div>	
                                            <span class="font-16 weight-600"> 4.5</span><sup><i class="fa fa-star txt-warning"></i></sup>
                                            <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">Name</h5>                                                               
                                            <h6 class="block capitalize-font">
                                                <i class="fa fa-map-marker font-14"></i> &nbsp;  <span class="font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas </span>
                                            </h6>
                                        </div>	
                                        <div class="social-info">
                                            <div class="row">
                                                <div class="col-xs-6 text-center ne-hov ">
                                                    <a href="location-visitor.php">
                                                        <span class="counts block head-font"><span class="counter-anim txt-success">25</span></span>
                                                        <span class="counts-text block">Today's Visitor</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 text-center ne-hov bdr-left">
                                                    <a href="location-deals.php">
                                                        <span class="counts block head-font"><span class="counter-anim txt-success">5</span></span>
                                                        <span class="counts-text block ">Active Deals</span>
                                                    </a>
                                                </div> 
                                                <div class="clearfix"></div>
                                                <div class="progress-anim mt-20">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-defoult wow animated progress-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-xs-6 text-center ne-hov">
                                                    <a href="Purchasers-details.php">
                                                        <span class="counts block head-font"><span class="counter-anim txt-success">15</span></span>
                                                        <span class="counts-text block">Deals Abated</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 text-center bdr-left ne-hov">
                                                    <a href="location-reviews.php">
                                                        <span class="counts block head-font"><span class="counter-anim txt-success">11</span></span>
                                                        <span class="counts-text block">Rating / Reviews</span>
                                                    </a> 
                                                </div>
                                                <div class="clearfix"></div>
                                                <a href="location-detail.php" class="btn btn-primary btn-block  btn-anim mt-30"><i class="fa fa-eye"></i><span class="btn-text">View More</span></a>
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
                                <!-- /Row -->

                               

                            </div>
                            <?php include 'footer.php';?>
                        </div>

        </div>

        <?php include 'script.php';?>
           
</body>

</html>