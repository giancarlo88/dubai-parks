<?php
$thisPage = "tab";
/**
 * Default tab page
 */

require './config.php';
require './template/header.php';


// require './template/navigation.php';

$black_logos = false;

if ( isset($show_voucher) && $show_voucher ) { 
	$banner_url = "http://xyz";
	$url_target= "blank";
 }
else {
	$banner_url = "./getcoupon.php";
	$url_target= "self";
}

?>

<div class="app-wrapper">
	<div>
		<div class = "tab__inner">
			<video playsinline autoplay muted loop class = "bgvid">
				<source src = "assets/videos/dubai_parks.mp4">
			</video>
	
			<div class="container tab__overlay">
			<!--<div class="logo clearfix">
				<img src="./assets/images/dubai-logo-white.png" />
			</div>-->

				<h2> <span class = "bolded">AMAZING</span> IS COMING... </h2>
					<p class="tab__byline">Crack the code for your chance to <span class = "txt-highlight"> WIN tickets to AMAZING!</span></p>
					<p>Login with Facebook to get started.</p>
				<a href="register.php"><img class = "tab__fb-login" src = "./assets/images/login_btn.png"></a>
			</p>
			<p>&nbsp;</p>
</div>
</div>
</div>


<div class="tab__container-tc-priv">
				<div class="tc">
					<a target="_blank" href="<?php echo AppConfig::get('app_terms'); ?>">Terms &amp; Conditions</a>
				</div>

				<div class="privacy">
					<a target="_blank" href="<?php echo AppConfig::get('app_privacy'); ?>">Privacy Policy</a>
				</div>
			</div>
		</div>
</div>
<?php

require './template/footer.php';

?>