<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Josefin_Sans_600.font.js"></script>
<script type="text/javascript" src="js/Lobster_400.font.js"></script>
<script type="text/javascript" src="js/sprites.js"></script>
<script type="text/javascript" src="js/gSlider.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="page4">
<div id="main">
	<header>
				       <?php require('header.php'); ?>

</header>
  <article id="content">
	<div class="col-1">
				       <?php require('col1.php'); ?>

	</div>
	<div class="col-2">
		<h2>Biografia</h2>
		<div class="img-box fl thumbnail"> <a href="images/01.jpg" rel="prettyPhoto[gallery_urka]"><img src="images/gallery5.jpg" alt="Uriel Kutner"><br>
		Urka</a> </div>
		<div class="img-box fl lst"> <a href="images/02.jpg" rel="prettyPhoto[gallery_jony]"><img src="images/gallery2.jpg" alt="Jonathan Jusid"><br>
		Jony</a> </div>
		<div class="img-box fl"> <a href="images/gallery/luky/01.jpg" rel="prettyPhoto[gallery_luky]"><img src="images/gallery/luky/thumb.jpg" alt="Lucas Moscovicz"><br>
		Luko</a> </div>
		<div class="img-box fl lst"> <a href="images/04.jpg" rel="prettyPhoto[gallery_alan]"><img src="images/gallery1.jpg" alt="Alan Pomerantz"><br>
		Alan</a> </div>
		<a class="invisible" href="images/gallery/luky/02.jpg" rel="prettyPhoto[gallery_luky]"></a>
		<a class="invisible" href="images/gallery/luky/03.jpg" rel="prettyPhoto[gallery_luky]"></a>
		<a class="invisible" href="images/gallery/luky/04.jpg" rel="prettyPhoto[gallery_luky]"></a>
		<a class="invisible" href="images/gallery/luky/05.jpg" rel="prettyPhoto[gallery_luky]"></a>
		<a class="invisible" href="images/gallery/luky/06.jpg" rel="prettyPhoto[gallery_luky]"></a>
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
	
	$('a[rel^=prettyPhoto]').prettyPhoto({theme:'round_square'})
	
	$('a[rel=prettyPhoto]').each(function(){
		var th=$(this),
			pb
		th
			.append(pb=$('<span class="playbutt"></span>').css({opacity:.7}))
		pb
			.bind('mouseenter',function(){
				$(this)
					.stop()
					.animate({opacity:.9})
			})
			.bind('mouseleave',function(){
				$(this)
					.stop()
					.animate({opacity:.7})
			})
	})
	.prettyPhoto({theme:'dark_square'})
})
</script>
</body>
</html>