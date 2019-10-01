<?php
/**
** activation theme
**/

/************************** APPEL SCRIPT ET CSS *******************************/
function theme_enqueue_styles() 
{
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js' );
	wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
/************************************************************/
function traitementFormulaire()
{
	header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 

	$variable1 = $_POST['nom'];
	$variable2 = $_POST['mail'];
	$variable3 = $_POST['message'];

	$to  = 'duirfrfr@msn.com';
	//$from = '80fe6aa055-9959ef@inbox.mailtrap.io';
	$subject = 'test formulaire';

	$message = '
	     <html>
	      <head>
	      </head>
	      <body>
	       <h1>Nouveau inscrit</h1>
	       <p><strong>Nom :</strong>'.$variable1.'</p>
	       <p><strong>Mail :</strong>'.$variable2.'</p>
	       <p><strong>Message :</strong>'.$variable3.'</p>
	      </body>
	     </html>
	     ';

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	
	if ($variable1 && $variable2 && $variable3 != NULL) {
		wp_mail($to, $subject, $message, implode("\r\n", $headers));
		echo "Le mail à été envoyé avec succes";
		}

	die();
}//traitement 
add_action( 'wp_ajax_traitementFormulaire', 'traitementFormulaire' );
add_action( 'wp_ajax_nopriv_traitementFormulaire', 'traitementFormulaire' );

/******************************************************/
// function register_my_menus() {
//   register_nav_menus(
//     array(
//       'header-menu' => __( 'Header Menu' )
//      )
//    );
//  }
// add_action( 'init', 'register_my_menus' );
/*********************** CUSTOM POST TYPE *********************************/
function custom_post_type(){

	$labels = array(
		'name'                  => _x( 'Vinyle', 'Post Type General Name', 'vinyle' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'vinyle' ),
		'menu_name'             => __( 'Ajouter un vinyle', 'vinyle' ),
		'name_admin_bar'        => __( 'Post Type', 'vinyle' ),
		'archives'              => __( 'Item Archives', 'vinyle' ),
		'attributes'            => __( 'Item Attributes', 'vinyle' ),
		'parent_item_colon'     => __( 'Parent Item:', 'vinyle' ),
		'all_items'             => __( 'Tous les vinyles', 'vinyle' ),
		'add_new_item'          => __( 'Ajouter un vinyle', 'vinyle' ),
		'add_new'               => __( 'Ajouter un vinyle', 'vinyle' ),
		'new_item'              => __( 'New Item', 'vinyle' ),
		'edit_item'             => __( 'Edit Item', 'vinyle' ),
		'update_item'           => __( 'Update Item', 'vinyle' ),
		'view_item'             => __( 'View Item', 'vinyle' ),
		'view_items'            => __( 'View Items', 'vinyle' ),
		'search_items'          => __( 'Search Item', 'vinyle' ),
		'not_found'             => __( 'Not found', 'vinyle' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'vinyle' ),
		'featured_image'        => __( 'Featured Image', 'vinyle' ),
		'set_featured_image'    => __( 'Set featured image', 'vinyle' ),
		'remove_featured_image' => __( 'Remove featured image', 'vinyle' ),
		'use_featured_image'    => __( 'Use as featured image', 'vinyle' ),
		'insert_into_item'      => __( 'Insert into item', 'vinyle' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'vinyle' ),
		'items_list'            => __( 'Items list', 'vinyle' ),
		'items_list_navigation' => __( 'Items list navigation', 'vinyle' ),
		'filter_items_list'     => __( 'Filter items list', 'vinyle' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'vinyle' ),
		'description'           => __( 'Post Type Description', 'vinyle' ),
		'labels'                => $labels,
		'supports'              => false,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		"menu_position" => 5,"menu_icon" => "dashicons-album",		
		"supports" => array( "title", "thumbnail", "excerpt", "revisions" ), //"editor"
		'capability_type'       => 'page',
	);
	register_post_type( 'vinyles', $args );
}
add_action( 'init', 'custom_post_type', 0 );

add_theme_support( 'post-thumbnails' );//pour article

/************************* TAXONOMY ********************************/
function type_vinyle_taxonomy(){
  $labels = [
    'name'                      => _x('Types musicaux', 'taximony general name'),
    'singular_name'             => _x('Type musical', 'taximony singular name'),
    'search_items'              => __('Rechercher un type musical'),
    'all_items'                 => __('Tous les types musicaux'),
    'parent_item'               => __('Type musical parent'),
    'parent_item_colon'         => __('Type musical parent'),
    'add_new_item'              => __('Ajouter un type musical'),
    'edit_item'                 => __('Editer un type musical', 'vinyle'),
    'update_item'               => __('Modifier un type musical', 'vinyle'),
    'new_item_name'             => __('Nouveau type musical', 'vinyle'),
    'menu_name'                 => __('Type musicaux')
  ];

  $args = [
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_columns'  => true,
    'query_var'           => true,
    'rewrite'             => ['slug' => 'vinyles']
  ];

  register_taxonomy('type-musicaux', 'vinyles', $args);
}

add_action('init', 'type_vinyle_taxonomy');

/************** MODIFICATION TEXTE SAISIE DU VINYLE **************************/
function wpm_change_title_cpt( $title ){
     //la fonction get_current_screen() permet de récupérer le post type
     $screen = get_current_screen();

 	 // Si le post type de l'écran actuel est 'vinyles'
     if  ( 'vinyles' == $screen->post_type ) {
	 	// Alors on modifie le titre d'origine par celui-la
          $title = 'Entrez le titre du vinyle';
     }
 	 // On renvoie notre nouveau titre
     return $title;
}
/* Modifier le texte "Saisissez votre titre ici" d'un custom post type */
add_filter( 'enter_title_here', 'wpm_change_title_cpt' );

/**********************************************************************/
// function vinyle_setting() {
// 	register_setting('vinyle_options_map', 'vinyle_map_address');
   
// }
// add_action('init', 'vinyle_setting');
/************************************************************************/
function wp_infinitepaginate(){ 
    $loopFile        = $_POST['loop_file'];
    $paged           = $_POST['page_no'];
    $posts_per_page  = get_option('posts_per_page');
 
    # Load the posts
    query_posts(array('paged' => $paged )); 
    get_template_part( $loopFile );
 
    exit;
}
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate');
/************************************************************************/








     
