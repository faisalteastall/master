<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Utter Now</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
	<link href="vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>

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
	<!--Preloader-->
    <?php include 'loader.php';?>
	<!--/Preloader-->
    <div class="wrapper  theme-3-active pimary-color-green">
		
        <?php include 'nev.php';?>
        <?php include 'menu.php';?>
        <?php include 'r-slide.php';?>
		<div class="right-sidebar-backdrop"></div>
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h5 class="txt-dark">Map 
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
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default border-panel card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
                                <div id="map" style="width: 100%; height: 700px;"></div>
                                
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
	    <script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
		<script type="text/javascript">
			AmCharts.makeChart("map",{
					"type": "map",
					"pathToImages": "http://www.amcharts.com/lib/3/images/",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#FFFFFF",
					"projection": "mercator",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(80,80,80,1)",
					"dataProvider": {
						"map": "worldLow",
						"getAreasFromMap": true,
						"images": [
							{
								// "top": 40,
								// "left": 60,
								// "width": 80,
								// "height": 40,
								// "pixelMapperLogo": true,
								// "imageURL": "http://pixelmap.amcharts.com/static/img/logo.svg",
								// "url": "http://www.amcharts.com"
							},
							{
								"selectable": true,
								"longitude": 87.934,
								"latitude": 61.079,
								"svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
								"color": "rgba(75,216,181,0.8)",
								"scale": 1
							}
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverOutlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(129,129,129,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(80,80,80,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(129,129,129,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					},
					"zoomControl": {
						"zoomControlEnabled": true,
						"homeButtonEnabled": false,
						"panControlEnabled": false,
						"right": 38,
						"bottom": 30,
						"minZoomLevel": 0.25,
						"gridHeight": 100,
						"gridAlpha": 0.1,
						"gridBackgroundAlpha": 0,
						"gridColor": "#FFFFFF",
						"draggerAlpha": 1,
						"buttonCornerRadius": 2
					}
				});
		</script>
</body>
</html>
