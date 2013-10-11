<?php get_header() ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
    <div class="block jumbo hexagonblock" id="top">
    <div class="device-clean">
      <div class="page-header centered polygon-bottom">
        <div class="vertical">
            <h2><?php the_title() ?></h2>
            <hr>
            <div class="content">
              <?php the_content() ?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  
<?php get_footer() ?>