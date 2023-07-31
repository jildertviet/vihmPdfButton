<?php
/*
* Plugin Name: vihmPdfButton
* Description: Extending the VIHM Theme: it adds a button to the Lesprogramma-page, under the 'bekijk het programma'-button. Depends on JQuery and the is_lesprogramma() PHP function.
* Author: Jildert Viet
* Version: 0.1.0
*/

// function is_lesprogramma(){ // DUMMY, REMOVE THIS
  // return true;
// }

// Javascript is only added and loaded if is_lesprogramma() returns true
// The is_lesprogramma() function is from the vihm Theme.
add_action ( 'wp_footer', 'addPdfButtonScript' );
function addPdfButtonScript() {
  if(function_exists('is_lesprogramma')){
    if (is_lesprogramma()) {
      // Load the Javascript file
      echo '<script type="text/javascript" src="' . plugin_dir_url( __FILE__ ) . 'vihmPdfButtom.js?v=1' . '"></script>';
    }
  } else{
    // echo 'error: is_lesprogramma() is undefined';
  }
}

// Add jQuery if needed. VIHM Theme has it, so it's commented.
function addJQuery(){
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>';
}
// add_action('wp_head', 'addJQuery');

?>
