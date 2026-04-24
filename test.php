<php
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

add_shortcode( 'test', 'test_shortcode' );
function test_shortcode() 


ob_start();
    ?>
    <div >This is a test shortcode!</div>
    <?php
    return ob_get_clean();



function test_shortcode() {
    ob_start();
    ?>
    <div >This is a test shortcode!</div>
    <?php
    return ob_get_clean(); // Return the captured content as a string
}
add_shortcode( 'test', 'test_shortcode' );

?>