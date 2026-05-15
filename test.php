<?php
/*
Plugin Name: Test
Description: This does not bug tim
Version: 1.0
Author: Student.404
*/
// Plugin code goes here
// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'bob.php';


add_action('wp_enqueue_scripts','enqueue_test_script');
function enqueue_test_script() {};

wp_enqueue_style('test','test.css');
if (file_exists(__DIR__ . '/helper/kint.php')) { 
    require_once __DIR__ . '/helper/kint.php';
}

add_shortcode( 'test', 'test_shortcode' );

function test_shortcode() {
    ob_start();
        setbowlingtimeform();            
    return ob_get_clean(); // Return the captured content as a string
}


function setbowlingtimeform() { 
    $form = '<form method="GET" action="/test-2"> 
                <label for="date">Date:</label>           
                    <input type="date" name="date">
                <label for="time">Time:</label>
                    <input type="time" name="time">
                <label for="bowlers">Bowlers:</label>
                    <input type="number" name="bowlers">
                    <input type="submit" value="Go">
            </form>';
    echo $form; 
}






?>

