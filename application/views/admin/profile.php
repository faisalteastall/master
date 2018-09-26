<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Utter Now</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content=""/>
	
	<!-- Favicon -->
	<link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
	<?php include 'css.php';?>
</head>

<body>
	<!--Preloader-->
	<?php include 'loader.php';?>
    <div class="wrapper  theme-3-active pimary-color-green">
        <?php include 'nev.php';?>
		<?php include 'menu.php';?>
        <?php include 'r-slide.php';?>
  
		<!-- Right Sidebar Backdrop -->
        <div class="right-sidebar-backdrop"></div>
        
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-xs-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body  pa-0">
									<div class="profile-box">
										<div class="profile-cover-pic">
											<!-- <div class="fileupload btn btn-default">
												<span class="btn-text"></span>
												<input class="upload" type="file"> 
											</div> -->
											<div class="profile-image-overlay"></div>
										</div>
										<div class="profile-info text-center">
											<div class="profile-img-wrap">
												<img class="inline-block mb-10" src="img/logo-lg.png" alt="user" id="user_image"/>
											</div>	
											<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success" id="name"></h5>
											<h6 class="block capitalize-font pb-10" id="gender"></h6>
										</div>	
										<div class="social-info">
											<div class="row">
												<div class="col-xs-12 text-center">
													<span class=" block" id="email"></span>
													<span class="counts-text block" id="address"></span>
												</div>
											</div>
											<button class="btn btn-success btn-block  btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
											<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
														</div>
														<div class="modal-body">
															<!-- Row -->
															<div class="row">
																<div class="col-lg-12">
																	<div class="">
																		<div class="panel-wrapper collapse in">
																			<div class="panel-body pa-0">
																				<div class="col-sm-12 col-xs-12">
																					<div class="form-wrap">
																						<form action="#" id="profileForm" method="post" enctype="multipart/form-data">
																							<div class="form-body overflow-hide">
																								<div class="form-element form-input">
																									<input id="Name" class="form-element-field" placeholder="Name" value="" name="user_name" type="input" required/>
																									<div class="form-element-bar"></div>
																									<label class="form-element-label" for="Name">Name</label>
																								</div>
																								<div class="form-element form-input">
																									<input id="Email" class="form-element-field" placeholder="Email ID" value="" name="user_email" type="input" required/>
																									<div class="form-element-bar"></div>
																									<label class="form-element-label" for="Email">Email ID</label>
																								</div>
																								<div class="form-element form-input">
																									<input id="Address" class="form-element-field" placeholder="Address" value="" name="user_address" type="input" required/>
																									<div class="form-element-bar"></div>
																									<label class="form-element-label" for="Address">Address</label>
																								</div>
																								<div class="form-element form-input">
																									<input id="Phone" class="form-element-field" placeholder="Phone Number" value=""  name="user_mobile" type="input" required/>
																									<div class="form-element-bar"></div>
																									<label class="form-element-label" for="Phone">Phone Number</label>
																								</div>
																								<div class="form-group">
																									<label class="control-label mb-10 txt-grey">Gender</label>
																									<div>
																										<div class="radio radio-success col-md-4">
																											<input  name="gender" id="radio_1" type="radio" checked="" value="Male">
																											<label for="radio_1"> Male </label>
																										</div>
																										<div class="radio radio-success col-md-4">
																											<input  name="gender" id="radio_2" type="radio" value="Female">
																											<label for="radio_2"> Female </label>
																										</div>
																									</div>
																								</div>
																								<div class="clearfix"></div>
																								<div class="form-group">
																									<label class="control-label mt-20 txt-grey">Profile Image</label>
																									<div>
																										<div class="mt-40">
																											<input type="file" name="user_image" id="input-file-now" class="dropify" />
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="form-actions mt-10">			
																								<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
																							</div>				
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- <div class="modal-footer">
															<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
															<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
														</div> -->
													</div>
													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>
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
	<?php include 'script.php';?>
	<script src="js/index.js"></script>
	<script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>
		
		<!-- Form Flie Upload Data JavaScript -->
		<script src="dist/js/form-file-upload-data.js"></script>
		<script type="text/javascript">			 
			  $('#name').append(user.user_name);
			  $('#Name').val(user.user_name);
			  $('#email').text(user.user_email);
			  $('#Email').val(user.user_email);
			  $('#Phone').val(user.user_mobile);
			  $('#address').text(user.user_address);
			  $('#Address').val(user.user_address);
			  $('#gender').append(user.gender);
			  $("#user_image").attr("src",user.image_url);
			  $("input[name=gender][value='"+user.gender+"']").prop("checked",true);
			  console.log(user.user_address);
			  $('#profileForm').on('submit',function(){
					event.preventDefault();					
					var file_data = $('input[name="user_image"]')[0].files[0];					
					 var data = new FormData();   
                     data.append("user_image", file_data);  
                     data.append("user_id",user.user_id); 
				    var form_data =$(this).serializeArray();
				    $.each(form_data,function(key,input){
				        data.append(input.name,input.value);
				    });                     
                    $.ajax({
                     headers: {
                    'access_token':sessionStorage.getItem('access_token'),  
                     },

                    data:data,
                    method:'post', 
                    enctype: 'multipart/form-data',   
                    contentType: false,
                    processData: false, 
                    url:'/utter/api/cud/update_profile',
                    success:function(res){
                    	 console.log(res);
                     if($.trim(res.status)=='true'){                                
                      sessionStorage.removeItem('user');
                      sessionStorage.setItem("user",JSON.stringify(res.user));  

                       location.reload();
                       
                          }
                    }

                })
					});
		</script>
</body>
</html>
