<?php get_header(); ?>
  <div id="content" class="work outer">
      <div class="drinner">
          <p class="titlebar">Showing all</p>
<?php if( have_rows('item') ):  while ( have_rows('item') ) : the_row(); ?>

        <a class="video">

          <div class="iframeo">
            <video width="533" height="303" controls="" name="media"><source src="<?php the_sub_field('video');?>" type="video/mp4"></video>

            </div>
</a>
        <?php endwhile;endif;?>

  </div>

  <?php get_footer(); ?>
