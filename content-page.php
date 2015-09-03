<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class = "column column-fix clearfix" id = "column-1"><?php the_content(); ?></div>
	<div class = "column column-fix clearfix" id = "column-2"></div>

</article><!-- #post-## -->

<script>
	
$(document).ready(
	function() { 

		var size = $("#column-1 > p").size();

		$("#column-1 > p").each(function(index){
			if (index >= size/2){
				$(this).appendTo("#column-2");
				}
		});

		console.log(size);
		console.log('ok');

	});

</script>