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

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title txt-light" id="exampleModalLabel1">Add category</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Category Name" type="input" required/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Category Name</label>
                                            </div>
                                            <div class="form-element form-input">
                                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Category code" type="input" required/>
                                                <div class="form-element-bar"></div>
                                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Category Code</label>
                                            </div>
                                            <label class="pointer">Status<br>
                                                <input type="checkbox" value="" class="js-switch" checked> 
                                            </label>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Enter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id="setting_panel_btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" title="Add category" class="btn btn-dropbox btn-icon-anim btn-circle font-24 weight-600 setting-panel-btn shadow-2dp"><i class="zmdi zmdi-plus"></i></button>
                        <div class="right-sidebar-backdrop"></div>
                        <div class="page-wrapper">
                            <div class="container-fluid">

                                <div class="row heading-bg">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <h5 class="txt-dark">All Categories</h5>
                                    </div>
                                    <!-- Breadcrumb -->
                                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                        <ol class="breadcrumb">

                                            <li class="active"><span>25</span></li>
                                        </ol>
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
                                                    <h6 class="panel-title txt-dark">Category List</h6>
                                                </div>
                                               
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>	
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
                                                                    <span class="weight-500 uppercase-font block font-13 txt-success">Name</span>
                                                                </div>
                                                                <div class="col-xs-5 text-right  pl-0 pr-0 data-wrap-right">
                                                                    <button data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" title="View category" class=" btn-default btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button>
                                                                    <button class=" btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button>
                                                                    
                                                                </div>
                                                            </div>	
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="panel panel-default card-view pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="sm-data-box">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
                                                                    <span class="weight-500 uppercase-font block font-13 txt-success">Name</span>
                                                                </div>
                                                                <div class="col-xs-5 text-right  pl-0 pr-0 data-wrap-right">
                                                                    <button data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" title="View category" class=" btn-default btn-icon-anim btn-circle"><i class="fa fa-pencil"></i></button>
                                                                    <button class=" btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash-o"></i></button>
                                                                    
                                                                </div>
                                                            </div>	
                                                        </div>
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
                                  



                                
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit category</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Category Name" type="input" disabled="" value="Name"/>
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Category Name</label>
                                                    </div>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Category code" type="input" required="" value="Code"/>
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Category Code</label>
                                                    </div>
                                                    <label class="pointer">Status<br>
                                                        <input type="checkbox" value="" class="js-switch" checked> 
                                                    </label>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Enter</button>
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
        <script>
            $(document).ready(function () {
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elems.forEach(function(html) {
            var switchery = new Switchery(html);
            });

            });

        </script>
</body>

</html>