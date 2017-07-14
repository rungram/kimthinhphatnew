<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); //bo thonng bao khi cac file chua dinh nghia
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	if(!isset($_SESSION['lang2']))
	{
	$_SESSION['lang2']='vi';
	}
	
	$lang=$_SESSION['lang2']; //Lấy ngỗn ngữ
	require_once _source."lang_$lang.php";	//Lấy các Hằng.

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."useronline.php";	
	
	
	include_once _lib."functions_giohang.php";
	$config_url='localhost:81/kimthinhphatnew';
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    	$pid=$_REQUEST['productid'];	
    	$_SESSION['size'.$pid]=$_REQUEST['spsize']; 
    	$_SESSION['mau'.$pid]=$_REQUEST['spmau']; 
    	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
    	addtocart($pid,$q);
    	redirect("http://$config_url/gio-hang.html");
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"><!-- InstanceBegin template="/Templates/Header-Footer.dwt" codeOutsideHTMLIsLocked="false" -->
 <!--<![endif]-->
 <base href="http://<?=$config_url?>/"	/>
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kim Thinh Phat</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <meta charset="UTF-8">
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-main.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <!-- For detail slider have thumb img -->
    <link href="slider/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <link href="slider/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="slider/thumbnail-slider.js" type="text/javascript"></script>
    <script src="slider/ninja-slider.js" type="text/javascript"></script>

    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>

    
    <?php include _template."layout/header.php"; ?>
	<?php include _template.$template."_tpl.php"; ?>
	<?php include _template."layout/footer.php"; ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">

        function initialize() {
            var mapOptions = {
                scrollwheel: false,
                zoom: 15,
                center: new google.maps.LatLng(13.758468, 100.567481)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        }

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                'callback=initialize';
            document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
<!-- InstanceEnd --></html>