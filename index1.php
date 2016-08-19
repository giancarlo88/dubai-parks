<?php

/**
 * Default home page
 */

require './config.php';

require './template/header.php';
// require './template/navigation.php';

?>

<script>
	top.location.href = '<?php echo AppFunction::getFBPageTabUrl();  ?>';
</script>

<?php

require './template/footer.php';

?>