<?php

/*
Template Name: actus
*/

get_header();
global $wpdb;


// $lastID = $wpdb->get_var( $wpdb->prepare( "SELECT MAX(id) FROM $wpdb->posts;", $post->ID));
// $titreAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_title FROM $wpdb->posts WHERE ID = $lastID", $post->ID));// ID = %d  75
// $imageAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_content FROM $wpdb->posts WHERE ID = $lastID", $post->ID));
// $dateAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_date FROM $wpdb->posts WHERE ID = $lastID", $post->ID));
// $extraitAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_excerpt FROM $wpdb->posts WHERE ID = $lastID", $post->ID));
// Je prend le dernier id celui de l'id de post.
//$last_term_id = $wpdb->get_var( $wpdb->prepare( "SELECT MAX(object_id) FROM $wpdb->term_relationships;", $post->ID));
// $num_taxo_dernier_id = $wpdb->get_var( $wpdb->prepare( "SELECT term_taxonomy_id FROM $wpdb->term_relationships", $post->ID));
// $recupNumberRock = $wpdb->get_var( $wpdb->prepare("SELECT * FROM wp_term_relationships WHERE term_taxonomy_id LIKE '%7%'", $post->ID));
?>

<h1>Actus du vinyle</h1>

<div id="boite">
  <div class="ligne" data-categoryid="<?php echo get_query_var('taxonomy'); ?>">
    <?php $loop = new WP_Query( array(
      'post_type' => 'vinyles',
      'posts_per_page' => -1,
      'orderby' => 'date',)); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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