<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- BASIC NEEDS
    ================================================== -->
	<meta charset="utf-8" />
	<title>London Cricket Club</title>
	<meta name="description" content="London Cricket Club">
	<meta name="author" content="">
    
	<!-- MOBILE META
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements
    ================================================== -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <!-- CSS
    ================================================== -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">

    <!-- GOOGLE FONT
    ================================================== -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700" />
    <link rel='stylesheet' id='mission-font-css'  href='http://fonts.googleapis.com/css?family=Oswald&#038;ver=3.3.2' type='text/css' media='all' />
    
	<!-- FABICON
	================================================== -->
	<link rel="shortcut icon" href="">

</head>
<body>

    <header id="header" class="navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div  class="logo">
                        <h3><a href="index.html">London Cricket Club</a> <small>we're Canadian, eh!</small></h3>
                    </div>
                </div>
                <div class="span8">
                    <div class="menu">
                        <ul class="main-menu">
			    	        <li><a href="index.html">Home</a></li>
	        		    	<li><a href="about.html">About Us</a></li>	        		    	
                            <li><a href="membership.html">Membership</a></li>
			            	<!--<li><a href="fixtures.html">Fixtures</a></li>-->
	        		    	<li><a class="current" href="contact.html">Contact</a></li>
		    	        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <div id="main">
        <div class="container">
            <div class="row">
                <section id="page-title" class="span12">
                    <h1>Sign Up</h1>
                    <hr>
                </section>
            </div>
            <div class="row">
<?php
    if (mail("sean@mitchwood.com","subject","message","From: xx\n")) 
    {
    }
?>
<p>Thanks for registering <?php echo $_POST["email"]; ?></p>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPTS
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
