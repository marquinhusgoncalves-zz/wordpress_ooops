<?php get_header() ?>
<div class="bg-cardapio">
  <div class="container">
    <div class="wrap">
      <h1 class="title-pages"><img src="<?php bloginfo('stylesheet_directory');?>/img/cardapio.png" class="title-img"/><br/>muita opção para sua festa</h1>
    </div>
    <div class="menu_cardapio"><?php wp_nav_menu(array('theme_location' => 'cardapio')) ?>
    </div>
    <div id="cardapio-pages"></div>
  </div>
</div><?php get_footer() ?>
<script>var templateDir = '<?php bloginfo("template_directory"); ?>/img/cardapio/';</script>