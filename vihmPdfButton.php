<?php
/*
* Plugin Name: vihmPdfButton
* Description: Extending the VIHM Theme: it adds a button to the Lesprogramma-page, under the 'bekijk het programma'-button. Depends on JQuery and the is_lesprogramma() PHP function.
* Author: Jildert Viet
* Version: 0.1.0
*/

function is_lesprogramma(){ // DUMMY, REMOVE THIS
  return true;
}

add_action ( 'wp_footer', 'addPdfButtonScript' );
function addPdfButtonScript() {
  if(function_exists('is_lesprogramma')){
    if (is_lesprogramma()) {
      echo '<script type="text/javascript" src="' . plugin_dir_url( __FILE__ ) . 'vihmPdfButtom.js?v=1' . '"></script>';
    }
  } else{
    // echo 'error: is_lesprogramma() is undefined';
  }
}

function addJQuery(){
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>';
}
add_action('wp_head', 'addJQuery');

// header( 'Access-Control-Allow-Origin: https://jildertviet.com' );
header( 'Access-Control-Allow-Origin: *' );

// add_action( 'wp_ajax_nopriv_get_data', 'my_ajax_handler' );
// add_action( 'wp_ajax_get_data', 'my_ajax_handler' );
// function my_ajax_handler() {
//     // wp_send_json_success( 'It works' );
//     echo ':D';
//     wp_die();
// }
?>
