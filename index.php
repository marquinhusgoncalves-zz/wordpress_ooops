<?php get_header(); ?>

<div class = "bg-index">
	<div id = "screen">
		
		<div class = "container text-index">
			<h1 class = "hit-the-floor" style = "margin-bottom: 0">
				muito espaço<br/>
				para realizar<br/>
				muita festa
			</h1>
		</div>

		<div class = "container" id = "post-index"><?php include("post-index.php"); ?></div>

	<div id = ""></div>
 	<div class = "hidden-xs">
		<video id = "video-index" autoplay poster = "<?php bloginfo('stylesheet_directory');?>/img/video/OOOPSBuffet.jpg" id = "bgvid" loop>
			<source src = "<?php bloginfo('stylesheet_directory');?>/img/video/OOOPSBuffet.m4v" type="video/mp4" />
			<source src = "<?php bloginfo('stylesheet_directory');?>/img/video/OOOPSBuffet.webm" type="video/webm" />
			<source src = "<?php bloginfo('stylesheet_directory');?>/img/video/OOOPSBuffet.ogv" type="video/ogg" />
			<source src = "<?php bloginfo('stylesheet_directory');?>/img/video/OOOPSBuffet.mp4" />
		</video>
	</div>

	</div>
</div>

<?php get_footer(); ?>

	<script>
		$(document).ready(function () {
			// $('#sidebartoggler').attr('checked', true);
			// $(".toggle i").removeClass("fa-bars").addClass("fa-times");

			$('footer').hide();
		});

	</script>