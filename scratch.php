<?php
$thisPage = "tab";
/**
 * Default tab page
 */

require './config.php';
require './template/header.php';


// require './template/navigation.php';


?>

<div class="app-wrapper">
	<div class="scratch__mystery-number-row">
		<div class = "scratch__mystery-number scratch__mystery-box1"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number1">&nbsp;</span></div>
		<div class = "scratch__mystery-number scratch__mystery-box2"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number2">&nbsp;</span></div>
		<span class = "big-slash">/</span>
		<div class = "scratch__mystery-number scratch__mystery-box3"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number3">&nbsp;</span></div>
		<div class = "scratch__mystery-number scratch__mystery-box4"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number4">&nbsp;</span></div>
		<span class = "big-slash">/</span>
		<div class = "scratch__mystery-number scratch__mystery-box5"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number5">&nbsp;</span></div>
		<div class = "scratch__mystery-number scratch__mystery-box6"><span class = "scratch__mystery-number-text" id = "scratch__mystery-number6">&nbsp;</span></div>
	</div>
	<div class = "scratch__instructions">
		<p>SCRATCH EACH PART OF AMAZING TO <span class = "txt-highlight">CRACK THE CODE</span>. 
		ONCE ALL <span class = "bold">6 NUMBERS</span> HAVE BEEN REVEALED YOU WILL 
		THEN BE ENTERED INTO THE PRIZE DRAW.
	</div>


	<div class="scratch-container" id="js-container">
	<div class ="scratch-overlay"><img src = "overlay.png"></div>
	<canvas class="canvas" id="js-canvas1" width = "200" height = "200"></canvas>
	<canvas class="canvas" id="js-canvas2" width="200" height="200"></canvas> 
	<canvas class="canvas" id="js-canvas3" width="200" height="200"></canvas> 
	<canvas class="canvas" id="js-canvas4" width="200" height="200"></canvas> 
	<canvas class="canvas" id="js-canvas5" width="200" height="200"></canvas> 
	<canvas class="canvas" id="js-canvas6" width="200" height="200"></canvas> 
	<img class = "underlay" src = "underlay.png">
	</div>
</div>

        <script src="assets/js/scratch.js"></script>	

</div>
<?php

require './template/footer.php';

?>