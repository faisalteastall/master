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
                                        <h5 class="txt-dark">Organizer Rating <span class="pull-right">25</span></h5>
                                    </div>
                                </div>
                                <!-- Row -->
                                <div class="row">

                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <div class="profile-box">
                                                    <div class="profile-cover-pic">                                                    
                                                        <div class="profile-image-overlay"></div>
                                                    </div>
                                                    <div class="profile-info text-center">
                                                        <div class="profile-img-wrap">
                                                            <img class="inline-block mb-10" src="img/mock1.jpg" alt="user"/>
                                                        </div>	
                                                        <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success">Name</h5>
                                                        <span class="font-16 weight-600"> 4.5</span><sup><i class="fa fa-star txt-warning"></i></sup>
                                                        <h6 class="block capitalize-font">
                                                            <i class="fa fa-envelope font-14"></i> &nbsp; <span class="font-13">nishikanr@teastallstudio.com</span> <br> 
                                                            <i class="fa fa-phone font-14"></i> &nbsp;  <span class="font-13">9585858585</span> <br> 
                                                            <i class="fa fa-map-marker font-14"></i> &nbsp;  <span class="font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas </span>
                                                        </h6>
                                                    </div>	
                                                    <div class="social-info">
                                                        <div class="row">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="counts block head-font"><span class="counter-anim">246</span></span>
                                                                <span class="counts-text block">No of Rating</span>
                                                            </div>
                                                            <div class="col-xs-6 text-center bdr-left">
                                                                <span class="counts block head-font"><span class="counter-anim">898</span></span>
                                                                <span class="counts-text block">Today's Rating</span>
                                                            </div>
                                                        </div>
                                                        <div class="button-list">
                                                            <button class="btn btn-Defolt btn-block"><span class="btn-text">Desable</span></button>
                                                            <button class="btn btn-primary btn-block"><span class="btn-text">Enable</span></button>
                                                        </div>
                                                    
                                                    </div>
                                                </div>    
                                    </div>
                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default card-view panel-refresh">
                                            <div class="refresh-container">
                                                <div class="la-anim-1"></div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Organizer Rating List</h6>
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
                                                    <div class="table-wrap">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Location Name</th>
                                                                        <th>Name</th>
                                                                        <th>Mobile No</th>
                                                                        <th>Email ID</th>
                                                                        <th>Comment</th>
                                                                        <th>Rating</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Location Name</th>
                                                                        <td><span class="txt-dark ">Lorem ipsum </span></td>
                                                                        <td>5485854758</td>
                                                                        <td>ipsum@gmail.com</td>
                                                                        <td>pulvinar nec molestie a, luctus eget tellus. In bibendum ac eros ac facilisis. Nunc </td>
                                                                        <td><span class="font-16 weight-600"> 4.5</span><sup><i class="fa fa-star txt-warning"></i></sup></td>
                                                                        <td>
                                                                            <label class="pointer">
                                                                                <input type="checkbox" value="" class="js-switch" checked> 
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                      
                                                    </div>	
                                                </div>	
                                            </div>
                                        </div>
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