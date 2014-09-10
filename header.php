<?php
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Asian Arts Talents Foundation (AATF)">
<meta name="author" content="">
<link rel="shortcut icon" href="/images/favicon.png">

<title>Asian Arts Talents Foundation - <?php global $title; print $title ?></title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<style>
body {
padding-top: 50px;
padding-bottom: 20px;
}
</style>

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Asian Arts Talents Foundation</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="/">Home</a></li>
<li><a href="/about.php">About</a></li>
<li><a href="/activities.php"><?print $current_year ?> Activities</a></li>
<li><a href="/gallery.php">Gallery</a></li>
<li><a href="/videos.php">Videos</a></li>
<li><a href="/forms.php">Forms</a></li>
<li><a href="/scholarshipwinners.php">Scholarship Winners</a></li>
<li><a href="/support.php">Support</a></li>
<li><a href="/contact.php">Contact</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="/forums" target="_blank">AATF Forums</a></li>
<li><a href="http://mail.aatf.us/" target="_blank">AATF Email</a></li>
<li class="divider"></li>
<li class="dropdown-header">Social Network Links</li>
<li><a href="//www.facebook.com/aatfus" target="_blank" id="gl1" class="glink" onmouseover="ehandler(event,menuitem1);">Facebook Page</a></li>
<li><a href="//twitter.com/aatfus" target="_blank" id="gl2" class="glink twitter-follow-button" data-show-count="false" onmouseover="ehandler(event,menuitem2);">Follow @aatfus</a></li>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
<li><a href="//plus.google.com/+AatfUsa" target="_blank" id="gl3" class="glink" onmouseover="ehandler(event,menuitem2);">Google Plus Page</a></li>
<li><a href="//www.youtube.com/user/aatfus" target="_blank" id="gl4" class="glink" onmouseover="ehandler(event,menuitem2);">YouTube Page</a></li>
<li><a href="//www.linkedin.com/groups/Asian-Arts-Talents-Foundation-6620148" target="_blank" id="gl5" class="glink" onmouseover="ehandler(event,menuitem2);">LinkedIn Group Page</a></li>
<li><a href="//www.linkedin.com/company/asian-arts-talents-foundation" target="_blank" id="gl6" class="glink" onmouseover="ehandler(event,menuitem2);">LinkedIn Company Page</a></li>
</ul>
</li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
