<?php
get_header();
 $content = explode("<!--more-->", $post->post_content);
?>

<div class="main-post single">
  <div class="inner">
    <div class="text">
    <?php if (have_posts()) : ?>
                                
      <?php while (have_posts()) : the_post(); ?>
      <div class="single-display post-vid">
        <div class="boxes">
          <div class="post-box">
	          <div class="image-container">
              
              <?php if (has_post_thumbnail()) {?>
                <!--NESTED if condition to display video icon by way of youtube link in post-->
              <a href="<?php if ( get_field( 'youtube' ) ):  the_field('youtube');?><?php endif;  ?>"
                <?php if ( get_field( 'youtube' ) ):  the_field('code'); else: ;endif;  ?>></a>
                <!--END OF NESTED if condition to display video icon by way of youtube link in post-->
                <?php the_post_thumbnail('full', array('class' => 'alignleft')); } else { ?>
                <img class="alignleft" src="<?php bloginfo('template_directory'); ?>/images/fallback.png" alt="<?php the_title(); ?>" />
              <?php } ?>
            </div>
            
            <div class="article">
            <h1><?php the_title(); ?></h1>
            <p><?php the_date(); ?></p>          
            <p><?php the_content(); ?></p>  
          </div>
        </div>
        </div>

        
    <?php 
      endwhile;
    endif;
    ?>  
</div>
    </div>
    <div class="clearfix"></div>
    <div class="pagination">
      <div class="leftsidelink">
      <?php previous_post_link(); ?>
      </div>
      <div class="rightsidelink">
        <?php next_post_link(); ?>
      </div>
    </div>
    
    <div class="padding clearfix"></div>
    
    
  </div>
</div>


<?php get_footer(); ?>  