<?php

/*
Template Name: jazz
*/
get_header(); ?>

<h1>Jazz</h1>

<div id="boite">
	<div class="ligne">

<?php $loop = new WP_Query( array( 
  'post_type' => 'vinyles',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'tax_query' => array(
                array(
                    'taxonomy' => 'type-musicaux',
                    'field' => 'slug',
                    'terms' => 'jazz'
                )
            )
	)); 

while ( $loop->have_posts() ) : $loop->the_post();?>
	
       <div class="block">
          <div class="dateActus"><?php echo the_date(); ?></div>
           <div class="imageActus"><?php echo the_post_thumbnail('medium'); ?></div><!--'thumbnail'150*150/medium300*300/large640*640/full original --> 
           <div class="titreActus"><?php echo the_title(); ?></div>
           <div class="extraitActus"><?php echo the_excerpt(); ?></div>

        </div>

<?php 
endwhile; wp_reset_query(); ?>
</div>
</div>

<?php get_footer(); ?> 