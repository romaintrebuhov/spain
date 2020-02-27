<?php
$a = 1;
$content = 'main.php';

if (isset($_GET['a']))
    $a = $_GET['a'];

if ($a == 2){
    $content = 'contacts.php';
} else if ($a == 3) {
    $content = 'catalog/index.php';
}

$catalog = file_get_contents('./catalog/content.json');
$catalog = json_decode($catalog, 1);

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Forward to beauty and health!</title>
	<meta name="description" content="Forward to beauty and health!">
	<meta name="author" content="">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body class="home-page">
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="/">Health blog</a>
				<span>Forward to beauty and health!</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li class="last"><a href="./"><span>Main page</span></a></li>
                    <li class="has-sub"><a href="/"><span>Articles</span></a>
                        <ul>
                            <?php foreach($catalog['texts'] as $key => $texts){
                                preg_match('#\<strong\>(.*?)\<\/strong\>#', $catalog['texts'][$key], $matches);
                                if (isset($matches[1])) {
                                    $matches[1] = preg_replace('#^(.*?)\:#', " ", $matches[1]);
                                    if (mb_strlen($matches[1]) > 50) {
                                        $matches[1] = mb_strcut($matches[1], 0, 50) . '...';
                                    }

                            ?>
                            <li class="last"><a href="/?article=<?=$key?>&a=3"><span><?=$matches[1]?></span></a></li>
                            <?php } else if (!isset($matches[1])) {?>
                            <li class="last"><a href="/?article=<?=$key?>&a=3"><span>%!langText(articles)!%-<?=$key?></span></a></li>
                            <?php } } ?>
                        </ul>
                    </li>
					<li class="last"><a href="./?a=2">Contacts</span></a></li>
				</ul>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="img/themes/healthandbeauty/hessam-hojati-M4hazNIyTsk-unsplash.jpg" />
				</div>
				<div class="item">
					<img src="img/themes/healthandbeauty/clip.dn.ua-65297_56.jpg" />
				</div>
				<div class="item">
					<img src="img/themes/healthandbeauty/christin-hume-0MoF-Fe0w0A-unsplash.jpg" />
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
                <?php include($content);?>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid bottom-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					Copyright @ - <a href="/">Health blog</a>
				</div>
			</div>
		</footer>
		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
            autoHeight: false,
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
	</div>
</body>
</html>