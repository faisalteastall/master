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
                                        <h5 class="txt-dark">Location Name 
                                            <span class="pull-right"> 
                                                <label class="pointer">Google Reviews &nbsp;
                                                    <input type="checkbox" value="" class="js-switch" checked> 
                                                </label>
                                            </span>
                                        </h5>
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
                                                    <h6 class="panel-title txt-dark">Location Reviews List</h6>
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
                                                <div class="panel-body row pa-0">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="panel panel-default card-view">
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body sm-data-box-1">
                                                                    <div class="sl-item">
                                                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                            <img class="img-responsive img-circle" src="img/avatar.jpg" alt="avatar">
                                                                        </div>
                                                                        <div class="sl-content">
                                                                            <p class="inline-block block"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Name</span>
                                                                                <span class="pull-right">
                                                                                    <label class="pointer">
                                                                                        <input type="checkbox" value="" class="js-switch" checked> 
                                                                                    </label>           
                                                                                </span>
                                                                            </p>
                                                                            <span class="block txt-grey font-12 capitalize-font">Deals Name </span>                                                                        
                                                                            <span class="block txt-dark weight-500 font-15 pt-5">
                                                                                <i class="fa fa-star-half-empty txt-success font-20 mr-10 text-left"></i> 4.2
                                                                                <span class="txt-grey font-12 capitalize-font pull-right">1 Day Ago </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-left">
                                                                        <p class="block txt-dark font-13 capitalize-font pb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget </p>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class=" bg-gray">
                                                                        <p class="block txt-grey font-12 capitalize-font  ">20 Liks &nbsp; 6D Dislikes </p>
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
            document.addEventListener("change", function(event) {
            let element = event.target;
            if (element && element.matches(".form-element-field")) {
                element.classList[element.value ? "add" : "remove"]("-hasvalue");
            }
            });
        </script>
</body>

</html>