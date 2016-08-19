<?php

/**
 * Thank you page
 */
$thisPage = "register";
require './config.php';
require './template/UserEntriesModel.php';
require './template/header.php';
// require './template/navigation.php';

$show_voucher = true;
$last_page = true;


?>

<div class="app-wrapper">

	<div class="bg-wrapper">

		<div class="gis-container">
			<h4 class="text-center">Thanks for entering, good luck!</h4>

			<p style="display: none" class="text-center">You have invited <?php echo isset($userTotalInvites) ? $userTotalInvites . ((int)$userTotalInvites === 1 ? ' friend' : ' friends' ) : '0 friends'; ?> and you now <span class="line-break">have <?php echo isset($userTotalEntries) ? $userTotalEntries . ((int)$userTotalEntries === 1 ? ' entry' : ' entries') : '0 entries'; ?>.</span></p>

			<p>&nbsp;</p>

			<div class="social-share clearfix">
				<p>&nbsp;</p>
				<p style="text-align: center"><strong>Share</strong> the competition</p>
				<ul class="list-inline text-center">
					<li>
						<a class="ss-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(AppFunction::getAppUrl()); ?>"
							data-title="<?php echo AppConfig::get('app_title'); ?>"
							data-link="<?php echo AppFunction::getAppUrl(); ?>"
							data-picture="<?php echo AppFunction::getFeaturedImage(); ?>"
							data-caption="<?php echo AppFunction::getAppUrl(); ?>"
							data-description="<?php echo AppConfig::get('facebook_share_message') ?>"
							>
							<span class="fa-stack fa-2x gis-facebook">
								
							</span>

							<span class="fa-stack-info">
								Share on <b>Facebook</b>
							</span>
						</a>
					</li>
					<li>
						<a class="ss-twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(AppConfig::get('twitter_tweet')); ?>&url=<?php echo urlencode(AppConfig::get('twitter_url')); ?>">
							<span class="fa-stack fa-2x gis-twitter">
							</span>
							<span class="fa-stack-info">
								Share on <b>twitter</b>
							</span>
						</a>
					</li>
					<li>
						<a class="ss-gplus" href="https://plus.google.com/share?url=<?php echo urlencode(AppFunction::getAppUrl()); ?>" data-link="<?php echo AppFunction::getAppUrl(); ?>">
							<span class="fa-stack fa-2x gis-google-plus">
							</span>
							<span class="fa-stack-info">
								Share on <b>Google+</b>
							</span>
						</a>
					</li>
				</ul>
			</div>

		<!-- <?php include_once("./template/voucher_html.php"); ?> -->
			<div class="container-tc-priv">
				<div class="col-xs-6 text-left tc-pp">
					<a target="_blank" href="<?php echo AppConfig::get('app_terms'); ?>">Terms &amp; Conditions</a>
				</div>

				<div class="col-xs-6 text-right tc-pp">
					<a target="_blank" href="<?php echo AppConfig::get('app_privacy'); ?>">Privacy Policy</a>
				</div>
			</div>

			<script>

				// if (screen.width > 1025) {
				// 	window.setTimeout(function() {
				// 	    window.location = 'getcoupon.php';
				// 	  }, 1000);
				// }

				
			</script>
		</div>

		<?php

require './template/footer.php';

?>