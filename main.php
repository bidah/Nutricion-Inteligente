<?php
/*
Template Name: Pagina principal
*/
?>
<?php get_header() ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="block jumbo hexagonblock" id="top">
    <?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1920, 9999 ), false, '' );
    ?>
    <div class="device" style="background: url('<?php echo $src[0]; ?>') no-repeat center center; background-size:cover !important;-webkit-background-size:cover !important; -moz-background-size:cover !important;">
      <div class="page-header sub">
        <div class="vertical">
            <h2><?php the_title() ?></h2>
            <hr>
            <div class="lead">
              <?php the_content() ?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  
  <div id="waypoint"></div>
  
  <?php $this_page_id=$wp_query->post->ID; ?>
  <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
  <?php
    global $more;
    $more = 0;
  ?>
  <?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1920, 9999 ), false, '' );
  ?>
  <div class="block hexagonblock polygon-top polygon-bottom odd" style="background: url('<?php echo $src[0]; ?>') no-repeat center bottom; background-size:cover !important;-webkit-background-size:cover !important; -moz-background-size:cover !important;" id="<?php the_ID(); ?>">
    <div class="page-header sub ">
        <div class="vertical">
            <h2><?php the_title() ?></h2>
            <div class="lead">
              <?php the_content() ?>
            </div>
        </div>
      </div>
  </div>
  <?php } ?>
  <?php wp_reset_query(); ?>
  
    <ul class="page-navigation">
      <li>
      <a href="#top" class="indicator"></a><a href="#top"><?php the_title()?></a>
      </li>
    <?php $this_page_id=$wp_query->post->ID; ?>
    <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
      <li>
        <a href="#<?php the_ID(); ?>" class="indicator"></a><a href="#<?php the_ID(); ?>"><?php the_title()?></a>
      </li>
    <?php } ?>
  <?php wp_reset_query(); ?>
    </ul>
  
<?php get_footer() ?>