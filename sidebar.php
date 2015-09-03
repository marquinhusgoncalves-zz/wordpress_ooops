<?php
/**
 * @package ooops!
 */
?>
<div id = "secondary" class = "widget-area" role = "complementary">
	<div class = "well">
		<div class = "container">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; ?>

		</div>
	</div>
</div>