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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47734004-1', 'minimalistasmusica.com.ar');
  ga('send', 'pageview');

</script>
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
		<h2>VideoClips</h2>
		
		<div class="p0">
		<iframe title="YouTube video player" width="501" height="346" src="http://www.youtube.com/embed/LFZyl0vWxuY" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<h2>Todos los videos</h2>
		<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script><div class="tintup" data-id="minimalistasmusica-1388258207/youtube" data-columns=""  style="height:1030px;width:536px;"><a href="http://www.tintup.com/blog/the-best-instagram-widget" style="width:118px;height:31px;position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">instagram widgets</a></div>

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
