<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Josefin_Sans_600.font.js"></script>
<script type="text/javascript" src="js/Lobster_400.font.js"></script>
<script type="text/javascript" src="js/sprites.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.settings.js"></script>
<script type="text/javascript" src="js/gSlider.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="page3">
<div id="main">
	 <header>
       <?php require('header.php'); ?>
 	 </header>
  <article id="content">
	<div class="col-1">
	       <?php require('col1.php'); ?>
	</div>
	<div class="col-2">
		<h2>Video</h2>
		<div class="p0">
		<iframe title="YouTube video player" width="501" height="346" src="http://www.youtube.com/embed/h47fNaOb-JU" frameborder="0" allowfullscreen></iframe>
		</div>
		<p><a href="#">Download Lilly Watson - One More Chance Music Video</a></p>
		<div class="p0">
		<iframe title="YouTube video player" width="501" height="346" src="http://www.youtube.com/embed/KcmDE-Qtmmw" frameborder="0" allowfullscreen></iframe>
		</div>
		<p><a href="#">Download Lilly Watson - Right Now Music Video</a></p>
	</div>
	<div class="col-3">
	       <?php require('col3.php'); ?>

	</div>
  </article>
  <div class="af clear"></div>
</div>
<footer>
	       <?php require('footer.php'); ?>

</footer>
<script type="text/javascript">Cufon.now()
$(function(){
	$('nav,.more,.header-more').sprites()

	$('.header-slider').gSlider({
		prevBu:'.hs-prev',
		nextBu:'.hs-next'
	})
})
</script>
</body>
</html>