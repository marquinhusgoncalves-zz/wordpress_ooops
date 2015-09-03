<?php get_header(); ?>

	<div class = "bg-padrao bg-cardapio">
		<div class = "container">
			<div style = "text-align: center"><img class = "img-cardapio" src = "<?php bloginfo('stylesheet_directory');?>/img/cardapio/cardapio.png" /></div>
			<h1 class = "cardapio">muita opção para sua festa</h1>

			<?php wp_nav_menu(array('theme_location' => 'cardapio')); ?>

			<div id = "cardapio-pages"></div> <!-- #cardapio-pages -->

		</div>

	</div> <!-- .bg_padrao -->

<?php get_footer(); ?>


<script src = "<?php bloginfo('stylesheet_directory');?>/js/jquery.columnizer.min.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/cardapio.js"></script>
<script>$(document).ready(function(){var a='<?php bloginfo("template_directory"); ?>/img/cardapio/';$("#menu-cardapio > .menu-item > a").each(function(a,b){var c=$(this).text();$(this).attr({"data-container":"body","data-toggle":"popover","data-placement":"top","data-content":c}).popover({trigger:"hover"}),console.log(c)}),$("#menu-cardapio > .menu-item > a").text(""),$("#menu-cardapio > .menu-item > a").each(function(b,c){var d=$(this).attr("href");if(d.indexOf("http")>=0){var e=d,f=new Array;f=e.split("/"),console.log(f[6])}$(this).each(function(){$('<img src="'+a+f[6]+'.png" />').appendTo(this)})})});</script>