<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 * 
 * Yes, this is using an old version of Bootstrap. too bad.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="/assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="/assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Metro</span></a>

                <a class="brand" href="/"><img src="/assets/images/logo.png"/></a>
                {menubar} </div>

            <!-- end: Header Menu -->

        </div>
    </div>

    <div class="container-fluid-full">
        <div class="row-fluid">
            <div id="content">
                <h1>{pagetitle}</h1>
                {content}
            </div>
        </div>
    </div>
	
    <footer>

        <p>
            <span style="text-align:center;">Copyright &copy; 2015-2017,  <a href="mailto:someone@somewhere.com">Me</a>.</span>

        </p>

    </footer>

	<!-- start: JavaScript-->

		<script src="/assets/js/jquery-1.9.1.min.js"></script>
	<script src="/assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="/assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="/assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="/assets/js/modernizr.js"></script>
	
		<script src="/assets/js/bootstrap.min.js"></script>
	
		<script src="/assets/js/jquery.cookie.js"></script>
	
		<script src='/assets/js/fullcalendar.min.js'></script>
	
		<script src='/assets/js/jquery.dataTables.min.js'></script>

		<script src="/assets/js/excanvas.js"></script>
	<script src="/assets/js/jquery.flot.js"></script>
	<script src="/assets/js/jquery.flot.pie.js"></script>
	<script src="/assets/js/jquery.flot.stack.js"></script>
	<script src="/assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="/assets/js/jquery.chosen.min.js"></script>
	
		<script src="/assets/js/jquery.uniform.min.js"></script>
		
		<script src="/assets/js/jquery.cleditor.min.js"></script>
	
		<script src="/assets/js/jquery.noty.js"></script>
	
		<script src="/assets/js/jquery.elfinder.min.js"></script>
	
		<script src="/assets/js/jquery.raty.min.js"></script>
	
		<script src="/assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="/assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="/assets/js/jquery.gritter.min.js"></script>
	
		<script src="/assets/js/jquery.imagesloaded.js"></script>
	
		<script src="/assets/js/jquery.masonry.min.js"></script>
	
		<script src="/assets/js/jquery.knob.modified.js"></script>
	
		<script src="/assets/js/jquery.sparkline.min.js"></script>
	
		<script src="/assets/js/counter.js"></script>
	
		<script src="/assets/js/retina.js"></script>

		<script src="/assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
