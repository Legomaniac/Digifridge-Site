<!DOCTYPE html>

<?php
$text = $_REQUEST['textToPost'];
$command1 = "echo \"<ID01><PA>" . $text . "\" > `cat /home/digifridge/utils/signdir.txt`";
shell_exec($command1);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Digifridge</title>
	<link rel="icon" 
      type="image/ico" 
      href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/index.html">Digifridge</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/index.html">Home</a></li>
              <li><a href="#contact">Contact</a></li>
			  <li><a href="#">LED Sign</a></li>
			  <li><a href="/lights.php">Light Control</a></li>
			  <li class="divider-vertical"></li>
			  <li><a href="http://digifridge.ddns.net:9091">Transmission</a></li>
			  <li><a href="http://digifridge.ddns.net:4040">Subsonic</a></li>			  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	<div class="hero-unit">
		<div class="row">
			<div class="span3">
			<img src ="assets/img/runningfridge.png" height="70%" width="70%"></src>
			</div>
			<h1>Control my LED Sign!</h1>
			<p>I have a scrolling LED Sign in my living room. Control what is says here, won't you?</p>
			<FORM METHOD=POST ACTION="sign.php">
			Post to my sign: <INPUT TYPE=TEXT NAME=textToPost SIZE=45>
			<P><INPUT TYPE=SUBMIT class="btn btn-primary btn-large">
			</FORM>
			<P>
			The sign is currently reading:  
                        <?php echo $text ?>
			<!--  <p><a class="btn btn-primary btn-large">Projects &raquo;</a></p>  -->
		</div>
      </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
