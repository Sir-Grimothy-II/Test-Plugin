<?php
/*
Plugin Name: Testy Toes
Description: This does not bug tim
Version: 1.0
Author: Student.404
*/
// Plugin code goes here
// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action('wp_enqueue_scripts','enqueue_test_script');
function enqueue_test_script(){

wp_enqueue_style('test','test.css');

}
function rando($number) {
    $randell = $number;
    return $randell;


}

function make_loop_run() {
    $i = 16;
    return $i;

}

add_shortcode( 'test', 'test_shortcode' );

function test_shortcode() {
  $bobby=rando(5);
    ob_start();
    
   // $i = 50;
   // do {
   //    if ($i==16) {
   //     echo 'u is ancient';
   //    } elseif ($i<16) {
   //         echo $i;
   //    } else {
   //         echo 'ran the reset'; 
   //              $i=make_loop_run();
   //    }
   //    $i++;
   //    
//
  //  } while ($i < 17);
//


for ($cashew = 16; $cashew >= 10; $cashew--) {
    echo $cashew . ' ';
}













    return ob_get_clean(); // Return the captured content as a string
   }
?>
