<?php get_header() ?>
<div class="bg-contato">
  <div class="container">
    <div class="wrap">
      <div class="text-effect">
        Contato
        
      </div>
      <h1>
        Entre em contato com a gente ou solicite uma cotação
        
      </h1>
      <div id="contato"><?php echo do_shortcode("[contact-form-7 id='324' title='Formulário de contato']") ?>
      </div>
    </div>
  </div>
</div>
<div id="map-canvas"></div><?php get_footer() ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/googlemap.min.js"></script>