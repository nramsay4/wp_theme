<?php

$post = $wp_query->post;

if ( in_category(array('accents-of-academy','accents-of-the-church','sermons','discipleship','kimberly-reisman','wesleyan-accent')) ) {
  include(TEMPLATEPATH . '/single-wesleyan-accent.php'); 
} 
/*
elseif ( in_category('35') ) {
  include(TEMPLATEPATH . '/post_templates/single-voices.php'); 
} 

elseif ( in_category('36') ) {
  include(TEMPLATEPATH . '/post_templates/single-ofwe.php'); 
} 
*/
else {
  include(TEMPLATEPATH . '/index.php');
}

?>