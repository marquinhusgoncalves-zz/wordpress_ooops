<?php get_header() ?>
<div id="screen">
  <div class="wrap">
    <div class="text-effect">
      Brinquedos
      
    </div>
  </div>
  <div id="video-viewport">
    <video autoplay="" webkit-playsinline="" loop="" width="640" height="360">
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.mp4" type="video/mp4"/>
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.ogv" type="video/ogv"/>
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.webm" type="video/webm"/>
    </video>
  </div>
  <div class="menu_brinquedos"><?php wp_nav_menu(array('theme_location' => 'brinquedos')) ?>
  </div>
</div><?php get_footer() ?>
<script>var templateDir = '<?php bloginfo("template_directory"); ?>/img/brinquedos/'</script>