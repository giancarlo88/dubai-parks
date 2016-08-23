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
	<div class="reg__bg-wrapper">
		<div class = "registration">
			<div class="reg-instructions">
				<div class = "steps">
					<p><strong>1:</strong> PLEASE LIKE OUR FACEBOOK PAGE. 
					</p>
						<div class = "reg__button-container">
							<span class="btn-fb-like">
								<div class="fb-like" data-href="https://facebook.com/thomascook" data-layout="button" data-action="like" data-show-faces="false" data-share="false">
								</div>
							</span>
						</div>
						<p class = "left"><strong>2:</strong> CONFIRM YOUR DETAILS:
						</p> 
				</div>
			</div>
				<!--<dd class="unlike-warning text-danger">You have unliked our Facebook page, please Like again.</dd> -->
			<form id="registerForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal" role="form">
				<div class = "form-container">	
						<input type="text" name="first_name" id="firstNameField" placeholder="First Name" class="reg-form">
						<input type="text" name="last_name" id="lastNameField" placeholder="Last Name" class="reg-form">
							<input type="text" name="email" id="emailField" placeholder="Email" class="reg-form">
			
					<!--<div class="form-group">
						<label class="sr-only" for="emailField">Phone</label>
						<div class="col-sm-6 col-sm-offset-3">
							<input type="text" name="phone" id="phoneField" placeholder="Phone" class="form-control">
						</div>
					</div> -->
						<p class = "mn-message">Have the <span class = "bold">code</span> already? Insert it below:</p>
						<div class = "mysteryNumbers">
							<input id = "num1" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
							<input id = "num2" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
							<input id = "num3" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1"  >
							<input id = "num4" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
							<input id = "num5" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >
							<input id = "num6" class = "mysterynumber" type = "text" pattern="[0-9]" placeholder = "?" maxlength = "1" >	
						</div>
					</div>	
						<div class = "reg__checkbox-container">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked name="outfit_subscription" id="outfitSubscriptionField"> I want to receive emails from Dubai Parks
								</label>
							</div>
							<div class="reg__checkbox">
								<label>
									<input type="checkbox" checked name="tc_subscription" id="tcSubscriptionField"> I want to receive emails from Thomas Cook UK
								</label>
							</div>
						</div>
					</div>
				

					<div class = "reg__btn-container">
						<!--<div class="text-center">
							<input type="text" class="app-cabacha" name="cabacha_<?php echo sha1(time()); ?>" value="">
							<input type="hidden" name="cabacha" value="cabacha_<?php echo sha1(time()); ?>">
							<input type="hidden" name="fbid" value="" id="fbidField"> -->
							<input type="submit" name="submit" value="Confirm" id="reg__submitBtn" class="button">
					
						</div> 
					</form>
					<div class="container-tc-priv">
				<div class="tc">
					<a target="_blank" href="<?php echo AppConfig::get('app_terms'); ?>">Terms &amp; Conditions</a>
				</div>

				<div class="privacy">
					<a target="_blank" href="<?php echo AppConfig::get('app_privacy'); ?>">Privacy Policy</a>
				</div>
		</div>
					</div>
				
				

			</div>
			
			
        </div>
</div>
	 <?php require './template/footer.php'; ?> 
