<?php
    require_once ('admin.php');
    include_once ('./admin-header.php');
    //include_once ('functions.php');
    //get_header();

/*function theme_enqueue_styles2() 
{
	wp_enqueue_style( 'style', get_template_directory_uri() . '../wp-content/themes/monTheme/style.css' );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '../wp-content/themes/monTheme/script.js' );
	wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles2' );
*/


?>

<div class="wrap nosubsub">
    <?php screen_icon('edit'); ?>
    <h2><?php echo esc_html( $title ); ?></h2>
    <br />
    
    <div id="formulaire2">

    <h2>Ou habitez-vous?</h2>
    <form method="post" action="">

      <div id="blocForm2">

        <div id="input_ville">
          <label for="ville" id="label_nom2"></label>
          <input type="text" name="ville2" id="ville" placeholder="Saisissez votre ville" />
        </div>

        <div id="boutonVerif2" onclick="ville()">Envoyer</div>
      </div>
    </form>

</div>
<?php
include('./admin-footer.php');
