<?php 

function book_appointment() {
    $query_params= array_map('sanitize_text_field', $_GET);
d($query_params);

$base_url = 'https://www.mybowlingpassport.com/785/11456/book/offers?';
        $query_params = array(
            'q_datetime' => '2026-05-09T21:00',
            'q_bowlers' => '1-4'
    ); 
    $full_url = $base_url . http_build_query($query_params);
    $link = '<a href="' . esc_url($full_url) . '">Book Now</a>';
    echo $link;

    echo $full_url;
}





add_shortcode( 'test-2', 'test_shortcode_2' );
    
function test_shortcode_2() {
    ob_start();
        book_appointment();  
    d('hi');
    return ob_get_clean(); // Return the captured content as a string



    }
