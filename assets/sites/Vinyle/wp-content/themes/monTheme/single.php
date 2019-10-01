<?php

$val = get_post_meta($post->ID,'_ma_valeur',true);
// $val renverra 'la valeur de mon champ'
$val = get_post_meta($post->ID,'_ma_valeur',false);
// $val renverra array('la valeur de mon champ','la seconde valeur', 'une autre valeur')


$vals= '';
$sql = "SELECT m.meta_value FROM ".$wpdb->postmeta." m where m.meta_key = '_ma_valeur' and m.post_id = '".$post->ID."' order by m.meta_id";
$results = $wpdb->get_results( $sql );
foreach( $results as $result ){
  $vals[] = $result->meta_value;
}


