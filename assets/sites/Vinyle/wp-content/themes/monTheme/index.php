<?php 
theme_enqueue_styles();
get_header();

$lastID = $wpdb->get_var( $wpdb->prepare( "SELECT MAX(id) FROM $wpdb->posts;", $post->ID));
$titreAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_title FROM $wpdb->posts WHERE ID = $lastID", $post->ID));// ID = %d  75
$extraitAlbum = $wpdb->get_var( $wpdb->prepare( "SELECT post_excerpt FROM $wpdb->posts WHERE ID = $lastID", $post->ID));

/*******************************************/
  $args = array(
  'post_type' => 'vinyles',
  'tax_query' => array(
    array(
      'taxonomy' => 'type-musicaux',
      'field'    => 'slug',
      'terms'    => 'disco',
    ),
  ),
);
$query = new WP_Query( $args );
$countDisco = $query->found_posts;
/*******************************************/
  $args = array(
  'post_type' => 'vinyles',
  'tax_query' => array(
    array(
      'taxonomy' => 'type-musicaux',
      'field'    => 'slug',
      'terms'    => 'rock',
    ),
  ),
);
$query = new WP_Query( $args );
$countRock = $query->found_posts;

/*******************************************/
  $args = array(
  'post_type' => 'vinyles',
  'tax_query' => array(
    array(
      'taxonomy' => 'type-musicaux',
      'field'    => 'slug',
      'terms'    => 'jazz',
    ),
  ),
);
$query = new WP_Query( $args );
$countJazz = $query->found_posts;
/*******************************************/
  $args = array(
  'post_type' => 'vinyles',
  'tax_query' => array(
    array(
      'taxonomy' => 'type-musicaux',
      'field'    => 'slug',
      'terms'    => 'blues',
    ),
  ),
);
$query = new WP_Query( $args );
$countBlues = $query->found_posts;
 ?>
<!--************************************************-->
 <?php
define('NUMBER_POST_SLIDER',3);

$args = array (
  'post_type' => 'vinyles',
  'nopaging' => false,
  'posts_per_page' => NUMBER_POST_SLIDER,
  'order' => 'DESC',
  'orberby' => 'ID',
  'post_status' => array('publish')
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {

  echo '<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">'."\n";
    echo '<ol class="carousel-indicators">'."\n";
      for( $i = 0; $i <NUMBER_POST_SLIDER; $i++){
        $activeSlide = ($i === 0)? 'class="active"' : '';
        echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'" '.$actveSlide.'></li>'."\n";
      }

  echo '</ol>'."\n";
  echo '<div class="carousel-inner">'."\n";
    $i = 0;
    while ( $query->have_posts() ) {
      $query->the_post();
      $activeSlide = ($i === 0)? 'active' : '';
        echo '<div class="carousel-item '.$activeSlide.'">'."\n";

        echo get_the_post_thumbnail( get_the_ID(), 'full', array('class' => 'd-block w-100' ) )."\n";
        echo '<div class="carousel-caption d-none d-md-block">'."\n"; ?>
        <div id="texte_slider"><?php echo '<h5>'.get_the_title().'</h5>'."\n";
        echo '<p>'.get_the_excerpt().'</p>'."\n"; ?> </div> <?php

        echo '</div>'."\n";
        echo '</div>'."\n";
        $i++;
    }

    echo '</div>'."\n";
    echo '<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">'."\n";
    echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'."\n";
    echo '<span class="sr-only">Précedente</span>'."\n";
    echo '</a>'."\n";
    echo '<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">'."\n";
    echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>'."\n";
    echo '<span class="sr-only">Suivante</span>'."\n";
    echo '</a>'."\n";
    echo '</div>'."\n";
}

?>
<!--***********************************************************************************-->
<div id="borderBottomSlider"></div>
<div id="ligne4vignettes">

  <div class="blockVignette">
    <div id="vignette1" class="vignetteAcceuil"></div>
    <div id="txtVignette1" class="txtVignette"><p>Blues</p><?php echo $countBlues." Titres"; ?></div>
  </div>

  <div class="blockVignette">
    <div id="vignette2" class="vignetteAcceuil"></div>
    <div id="txtVignette2" class="txtVignette"><p>Disco</p><?php echo $countDisco." Titres"; ?></div>
  </div>

  <div class="blockVignette">
    <div id="vignette3" class="vignetteAcceuil"></div>
    <div id="txtVignette3" class="txtVignette"><p>Rock</p><?php echo $countRock." Titres";  ?></div>
  </div>


  <div class="blockVignette">
    <div id="vignette4" class="vignetteAcceuil"></div>
    <div id="txtVignette4" class="txtVignette"><p>Jazz</p><?php echo $countJazz." Titres"; ?></div>
  </div>

</div>
<!--***********************************************************************************-->
<section id="blocFormulaire">

  <div id="formulaire">
    <h2>Laissez-nous un message</h2>
    <form method="post" action="">
      <div id="blocForm">
        <div id="boxNom" class="boxInput">
          <label for="nom" id="label_nom"><i class="fas fa-user"></i></label>
          <input type="text" name="nom1" id="nom" class="vide" placeholder="Nom" />
        </div>
        <p id="label_p_nom">*Champ obligatoire</p>
        <div id="boxMail" class="boxInput">
          <label for="mail" id="label_mail"><i class="fas fa-envelope"></i></label>
          <input type="email" name="mail" id="mail" class="vide" placeholder="Mail" /> 
        </div>
        <p id="pMail">*Champ obligatoire</p>  
        <div id="boxMessage">
          <label for="contact" id="label_contact"><i class="fas fa-comment-alt"></i></label>
          <textarea name="contact" id="contact" placeholder="Laissez nous un message" class="vide"></textarea>
        </div>
        <p id="pArea">*Champ obligatoire</p>
      </div>
      <div id="boutonVerif" onclick="check()">Envoyer</div><!--<i class="fas fa-check"> -->
    </form> 
  </div>
<!--*****************************************************************************************-->
  <div id="map">
    <h2>Ou rendez-nous viste</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6778932.708232371!2d0.9680316878841413!3d46.16340305643777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1560425893920!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>

<?php 
get_footer(); ?>





