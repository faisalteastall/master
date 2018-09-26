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
            .pointer {
                cursor: pointer;
            }
            
            .dropdown-menu {
                min-width: auto;
            }
            
            .p-a-1 {
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

        <input type="hidden" id="myInput" value="hp-1">

        <div class="wrapper  theme-3-active pimary-color-green">
            <?php include 'nev.php';?>
                <?php include 'menu.php';?>
                    <?php include 'r-slide.php';?>

                        <div class="right-sidebar-backdrop"></div>
                        <div class="page-wrapper">
                            <div class="container-fluid">

                                <div class="row heading-bg">
                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                        <h5 class="txt-dark">Points Value</h5>
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
                                                                <a href="loyalty-points.php">
                                                                    <div class="col-xs-9 text-center data-wrap-left">
                                                                        <span class="txt-light block counter"><span class="counter-anim">25555</span></span>
                                                                        <span class="weight-500 uppercase-font block font-13 txt-light">Total Points Generated</span>
                                                                    </div>
                                                                    <div class="col-xs-3 text-center txt-black data-wrap-right">
                                                                        <i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
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
                                                                <a href="total-redeem.php">
                                                                    <div class="col-xs-9 text-center data-wrap-left">
                                                                        <span class="txt-light block counter"><span class="counter-anim">250</span></span>
                                                                        <span class="weight-500 uppercase-font block font-13 txt-light">Total Redeem points</span>
                                                                    </div>
                                                                    <div class="col-xs-3 text-center txt-black data-wrap-right">
                                                                        <i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
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
                                                                <a href="points-generated.php">
                                                                    <div class="col-xs-9 text-center data-wrap-left">
                                                                        <span class="txt-light block counter"><span class="counter-anim">25</span></span>
                                                                        <span class="weight-500 uppercase-font block font-13 txt-light">Today's Points Generated</span>
                                                                    </div>
                                                                    <div class="col-xs-3 text-center txt-black data-wrap-right">
                                                                        <i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
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
                                                                <a href="organization-rating.php">
                                                                    <div class="col-xs-9 text-center data-wrap-left">
                                                                        <span class="txt-light block counter"><span class="counter-anim">25</span></span>
                                                                        <span class="weight-500 uppercase-font block font-13 txt-light">Point value</span>
                                                                    </div>
                                                                    <div class="col-xs-3 text-center txt-black data-wrap-right">
                                                                        <i class="fa fa-square txt-warning data-right-rep-icon txt-light"></i>
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
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body row pa-0">

                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div id="hp-1" onclick="togglebtn(this.id)" class="panel panel-default card-view hp1">
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body sm-data-box-1">
                                                                <div class="sl-item">
                                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                        <img class="img-responsive" src="img/ic-1.png" alt="avatar">
                                                                    </div>
                                                                    <div class="sl-content">
                                                                        <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Visit <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> </span></span>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <p class="block txt-dark font-13 capitalize-font">
                                                                    <span class="font-16 text-dark pull-left">Visit Location = 5 Points </span>
                                                                    <span class="pull-right">
                                                                        <button data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" title="Edit" class="btn btn-primary btn-anim btn-xs"><i class="fa fa-eye"></i><span class="btn-text">Edit</span></button>
                                                                    </span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div id="hp-2" onclick="togglebtn(this.id)" class="panel panel-default card-view hp1">
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body sm-data-box-1">
                                                                <div class="sl-item">
                                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                        <img class="img-responsive" src="img/ic-2.png" alt="avatar">
                                                                    </div>
                                                                    <div class="sl-content">
                                                                        <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Review <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> </span></span>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <p class="block txt-dark font-13 capitalize-font">
                                                                    <span class="font-16 text-dark">Review = 5 Points    </span> 
                                                                    <span class="pull-right">
                                                                        <button data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" title="Edit" class="btn btn-primary btn-anim btn-xs"><i class="fa fa-eye"></i><span class="btn-text">Edit</span></button>
                                                                    </span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div id="hp-3" onclick="togglebtn(this.id)" class="panel panel-default card-view hp1">
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body sm-data-box-1">
                                                                <div class="sl-item">
                                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                        <img class="img-responsive" src="img/ic-3.png" alt="avatar">
                                                                    </div>
                                                                    <div class="sl-content">
                                                                        <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Image Upload <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> </span></span></p>
                                                                    </div>
                                                                </div>
                                                                <p class="block txt-dark font-13 capitalize-font">
                                                                    <span class="font-16 text-dark">Image Upload = 5 Points </span>
                                                                     <span class="pull-right">
                                                                        <button data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo" title="Edit" class="btn btn-primary btn-anim btn-xs"><i class="fa fa-eye"></i><span class="btn-text">Edit</span></button>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                    <div id="hp-4" onclick="togglebtn(this.id)" class="panel panel-default card-view hp1">
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body sm-data-box-1">
                                                                <div class="sl-item">
                                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                                        <img class="img-responsive" src="img/ic-4.png" alt="avatar">
                                                                    </div>
                                                                    <div class="sl-content">
                                                                        <p class="inline-block block pt-15"><span class="capitalize-font txt-success mr-5 weight-500 pt-0">Rating <span class="txt-grey font-16 capitalize-font pull-right"><img width="20" src="img/points.png"/> </span></span></p>
                                                                    </div>
                                                                </div>
                                                                <p class="block txt-dark font-13 capitalize-font">
                                                                    <span class="font-16 text-dark">Rating = 5 Points </span> 
                                                                    <span class="pull-right">
                                                                        <button data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo" title="Edit" class="btn btn-primary btn-anim btn-xs"><i class="fa fa-eye"></i><span class="btn-text">Edit</span></button>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="hp-11" class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel panel-default card-view panel-refresh">
                                                    <div class="refresh-container">
                                                        <div class="la-anim-1"></div>
                                                    </div>
                                                    <div class="panel-heading">
                                                        <div class="pull-left">
                                                            <h6 class="panel-title txt-dark">Visit Points Value History</h6>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card-view pa-10">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-12  pl-0 pr-0 data-wrap-left">
                                                                <h4 class="panel-title txt-dark ">Dec 12 2018</h4>
                                                                <span class="font-16 text-success pull-left">Visit Location   </span> <span class="txt-success font-16 capitalize-font pull-right font-500">5 Points </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="hp-12" class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel panel-default card-view panel-refresh">
                                                    <div class="refresh-container">
                                                        <div class="la-anim-1"></div>
                                                    </div>
                                                    <div class="panel-heading">
                                                        <div class="pull-left">
                                                            <h6 class="panel-title txt-dark">Review Points Value History</h6>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card-view pa-10">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-12  pl-0 pr-0 data-wrap-left">
                                                                <h4 class="panel-title txt-dark ">Dec 12 2018</h4>
                                                                <span class="font-16 text-success pull-left">Review Location   </span> <span class="txt-success font-16 capitalize-font pull-right font-500">5 Points </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="hp-13" class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel panel-default card-view panel-refresh">
                                                    <div class="refresh-container">
                                                        <div class="la-anim-1"></div>
                                                    </div>
                                                    <div class="panel-heading">
                                                        <div class="pull-left">
                                                            <h6 class="panel-title txt-dark">Image Upload Points Value History</h6>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card-view pa-10">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-12  pl-0 pr-0 data-wrap-left">
                                                                <h4 class="panel-title txt-dark ">Dec 12 2018</h4>
                                                                <span class="font-16 text-success pull-left">Image Upload Location   </span> <span class="txt-success font-16 capitalize-font pull-right font-500">5 Points </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="hp-14" class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="panel panel-default card-view panel-refresh">
                                                    <div class="refresh-container">
                                                        <div class="la-anim-1"></div>
                                                    </div>
                                                    <div class="panel-heading">
                                                        <div class="pull-left">
                                                            <h6 class="panel-title txt-dark">Rating Points Value History</h6>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card-view pa-10">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-12  pl-0 pr-0 data-wrap-left">
                                                                <h4 class="panel-title txt-dark ">Dec 12 2018</h4>
                                                                <span class="font-16 text-success pull-left">Rating Location   </span> <span class="txt-success font-16 capitalize-font pull-right font-500">5 Points </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Visit Points Value</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="2" type="input" required value="5" />
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Current Visit Points Value</label>
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
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Review Points Value</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="2" type="input" required value="5" />
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Current Review Points Value</label>
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
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Image Upload Points Value</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="2" type="input" required value="5" />
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Current Image Upload Points Value</label>
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
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <button type="button" class="close txt-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title txt-light" id="exampleModalLabel1">Edit Rating Points Value</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-element form-input">
                                                        <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="2" type="input" required value="5" />
                                                        <div class="form-element-bar"></div>
                                                        <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Current Rating Points Value</label>
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

                            </div>
                            <?php include 'footer.php';?>
                        </div>

        </div>
        <?php include 'script.php';?>
        <script>



            $(document).ready(function(){	
                var x = document.getElementById("myInput").value;
                 $("#"+x).css("background-color", "#f5f5f5");
                   $('#hp-11').show();
                    $('#hp-12').hide();
                    $('#hp-13').hide();
                    $('#hp-14').hide();
            });

               function togglebtn(id){
                $("#"+id).css("background-color", "#f5f5f5");
                if(id=='hp-1'){
                    $('#hp-11').show();
                    $('#hp-12').hide();
                    $('#hp-13').hide();
                    $('#hp-14').hide();
                }
                if(id=='hp-2'){
                    $('#hp-11').hide();
                    $('#hp-12').show();
                    $('#hp-13').hide();
                    $('#hp-14').hide();
                }
                
                if(id=='hp-3'){
                    $('#hp-11').hide();
                    $('#hp-12').hide();
                    $('#hp-13').show();
                    $('#hp-14').hide();
                }
                if(id=='hp-4'){
                    $('#hp-11').hide();
                    $('#hp-12').hide();
                    $('#hp-13').hide();
                    $('#hp-14').show();
                }
                var x = document.getElementById("myInput").value;
                $("#"+x).css("background-color", "#fff");
                 document.getElementById("myInput").value = id;
            }

        </script>

</body>

</html>