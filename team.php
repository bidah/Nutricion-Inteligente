<?php
/*
Template Name: Conocenos
*/
?>
<?php get_header() ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="block jumbo hexagonblock" id="top">
    <?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1920, 9999 ), false, '' );
    ?>
    <div class="device fixed" style="background: url('<?php echo $src[0]; ?>') no-repeat center center; background-size:cover !important;-webkit-background-size:cover !important; -moz-background-size:cover !important;">
      <div class="page-header left">
        <div class="vertical">
            <h2><?php the_title() ?></h2>
            <div class="lead">
              <?php the_content() ?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <div id="waypoint"></div>
  <div class="block hexagonblock polygon-top odd">
    <div class="page-header centered">
        <div class="vertical">
            <h2>Equipo</h2>
            <p class="lead">           
Somos un equipo de excelencia, <strong>pioneros en Latinoamérica</strong> en la aplicación de tratamientos de salud 
asociados a la nutrición, en lo que se destaca <a href="/fundamentos#nutrigenomica">Nutrigenómina</a>, Diagnóstico y Tratamiendo de Intolerancias Alimentarias y en <a href="/fundamentos#nutrigenomica">Nutrición Ortomolecular</a>.
            </p>
            <?php include(TEMPLATEPATH . '/team-grid.php');?>
        </div>
      </div>
  </div>
<?php get_footer() ?>