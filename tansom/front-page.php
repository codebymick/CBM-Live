<?php get_header();$content = explode("<!--more-->", $post->post_content);?>

  <div class="first-pic">
    <img src="<?php bloginfo('template_directory');?>/images/bg1a.png" style="width: 100%; height: auto">
    <div class="title">

        <h1><strong><?php the_title();?></strong></h1>
        <p><?php echo apply_filters('the_content', $content[0]);?></p>
    </div>
  </div>

      <div id="content">
        <?php $i=2; if( have_rows('section') ):  while ( have_rows('section') ) : the_row(); ?>
        <div class="section clearfix video">
          <div class="fullscreen-bg">
            <video muted poster="<?php the_sub_field('cover_image');?>" id="vid<?php echo $i ;?>" playsinline muted loop width="100%" class="fullscreen-bg">
              <source src="<?php the_sub_field('video');?>" type="video/<?php the_sub_field('video_type');?>">
            </video>
          </div>
          <div class="inner">
            <div class="title">
              <h1><?php the_sub_field('title');?></h1>
              <p><?php the_sub_field('subline');?></p>
              <div id="play-pause<?php echo $i ;?>" class="play-btn"></div>
            </div>
          </div>
        </div>
      </div>
        <?php  $i++;endwhile;endif; get_footer(); ?>
