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
    <?php include 'loader.php';?>
        <!--/Preloader-->
        <div class="wrapper theme-3-active pimary-color-green">
            <?php include 'nev.php';?>
                <?php include 'menu.php';?>
                    <?php include 'r-slide.php';?>
                        <div class="right-sidebar-backdrop"></div>
                        <div class="page-wrapper">
                            <div class="container-fluid">
                                <!-- Title -->
                                <div class="row heading-bg">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <h5 class="txt-dark">All Images</h5>
                                    </div>

                                    <!-- /Breadcrumb -->
                                </div>
                                <!-- /Title -->

                                <!-- Row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default card-view">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="filter-wrap mb-5">
                                                        <!--/Portfolio Filters -->
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="gallery-wrap">
                                                        <div class="portfolio-wrap project-gallery">
                                                            <ul id="portfolio" class="portf auto-construct project-gallery" data-col="3">
                                                                <li class="item" data-src="img/gallery/mock1.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock1.jpg"/>
                                                                    </a>
                                                                </li>
                                                                <li class="item" data-src="img/gallery/mock2.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock2.jpg"/>
                                                                    </a>
                                                                </li>
                                                                <li class="item" data-src="img/gallery/mock4.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock4.jpg"/>
                                                                    </a>
                                                                </li>
                                                                <li class="item" data-src="img/gallery/mock3.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock3.jpg"/>
                                                                    </a>
                                                                </li>

                                                                <li class="item" data-src="img/gallery/mock5.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock5.jpg"/>
                                                                    </a>
                                                                </li>
                                                                <li class="item" data-html="#video1" data-poster="img/gallery/mock6.jpg">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src="img/gallery/mock6.jpg"/>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                           
                                                        </div>
                                                        <div class="claerfix"></div>
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
                                <!-- /Row -->
                            </div>

                            <!-- Footer -->
                            <?php include 'footer.php';?>
                                <!-- /Footer -->

                        </div>
        </div>
        <?php include 'script.php';?>
            <!-- Gallery JavaScript -->
            <script src="dist/js/isotope.js"></script>
            <script src="dist/js/lightgallery-all.js"></script>
            <script src="dist/js/froogaloop2.min.js"></script>
            <script src="dist/js/gallery-data.js"></script>

</body>

</html>