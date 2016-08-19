<?php


/**
 * Default tab page
 */
$thisPage = "register";
require './config.php';
require './template/ValidateFormModel.php';
require './template/header.php';
// require './template/navigation.php';

?>

<div class="app-wrapper">
	<div class="bg-wrapper">
		<div class = "registration">
			<div class="reg-instructions">
				<!--<span class = "text-center"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></span> -->
							<div class = "steps">
							<p><strong>1:</strong> PLEASE LIKE OUR FACEBOOK PAGE. </p>
							<div class = "button-container">
							<span class="btn-fb-like">
							<div class="fb-like" data-href="https://facebook.com/thomascook" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
							</span>
							</div>
							<p><strong>2:</strong> CONFIRM YOUR DETAILS:</p> 
							</div>
						</div>
				<!--<dd class="unlike-warning text-danger">You have unliked our Facebook page, please Like again.</dd> -->
				<div class = "form-container">

				<form id="registerForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal" role="form">

					
						<label class="sr-only" for="firstNameField">First Name</label>
						<input type="text" name="first_name" id="firstNameField" placeholder="First Name" class="form-control">
						<label class="sr-only" for="lastNameField">Last Name</label>
						<input type="text" name="last_name" id="lastNameField" placeholder="Last Name" class="form-control">
						<label class="sr-only" for="emailField">Email</label>
						<input type="text" name="email" id="emailField" placeholder="Email" class="form-control">
					
					<!--<div class="form-group">
						<label class="sr-only" for="emailField">Phone</label>
						<div class="col-sm-6 col-sm-offset-3">
							<input type="text" name="phone" id="phoneField" placeholder="Phone" class="form-control">
						</div>
					</div> -->
					</div>
					<div class = "mysteryNumbers">
					
					<input id = "firstNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
					<input id = "secondNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
					<input id = "thirdNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1"  >
					<input id = "fourthNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
					<input id = "fifthNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
					<input id = "sixthNum" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >	
					
					
				

						<div>
							<div class="checkbox">
								<label>
									<input type="checkbox" checked name="outfit_subscription" id="outfitSubscriptionField"> I want to receive emails from Dubai Parks
								</label>
							</div>
						</div>

						<div
							<div class="checkbox">
								<label>
									<input type="checkbox" checked name="tc_subscription" id="tcSubscriptionField"> I want to receive emails from Thomas Cook UK
								</label>
							</div>
						</div>
						
					</div>

					<div>
						<!--<div class="text-center">
							<input type="text" class="app-cabacha" name="cabacha_<?php echo sha1(time()); ?>" value="">
							<input type="hidden" name="cabacha" value="cabacha_<?php echo sha1(time()); ?>">
							<input type="hidden" name="fbid" value="" id="fbidField">
							<input type="submit" name="submit" value="Confirm" id="submitBtn" class="btn btn-primary">
						</div> -->
					</div>
				</form>
				</div>

			</div>
			<div class="container-tc-priv">
				<div class="col-xs-6 text-left tc-pp">
					<a target="_blank" href="<?php echo AppConfig::get('app_terms'); ?>">Terms &amp; Conditions</a>
				</div>

				<div class="col-xs-6 text-right tc-pp">
					<a target="_blank" href="<?php echo AppConfig::get('app_privacy'); ?>">Privacy Policy</a>
				</div>
			</div>

		</div>
	


</div>
<?php
require './template/footer.php';
?>