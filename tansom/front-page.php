<?php get_header(); ?>
  <div class="first-pic">
    <img src="<?php bloginfo('template_directory');?>/images/bg1a.png" style="width: 100%; height: auto">
    <div class="title">
      <?php the_title('<h1>','</h1>'); the_content('<p>','</p>'); ?>
    </div>
  </div>
    <?php $video_source = '<source src="https://www.codebymick.com/images/movie/neuBuro.mov" type="video/mov"><source src="https://www.codebymick.com/images/movie/neuBuro.mp4" type="video/mp4"><source src="https://www.codebymick.com/images/movie/neuBuro.webm" type="video/webm">';?>

  <div id="content">

    <?php   $loop = new WP_Query( array( 'post_type' => 'Studios') );
        if ( $loop->have_posts() ) :   while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="section clearfix video">
      <div class="fullscreen-bg">
        <video muted poster="<?php bloginfo('template_directory');?>/images/bg<?php the_field('vidclass'); ?>.png" id="vid<?php the_field('vidclass'); ?>" playsinline muted loop width="100%" class="fullscreen-bg">
          <?php echo $video_source;?>
        </video>
      </div>
      <div class="inner">
        <div class="title">
          <?php the_title('<h1>','</h1>');  the_content('<p>','</p>'); ?>
          <div id="play-pause<?php the_field('vidclass'); ?>" class="play-btn"></div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
