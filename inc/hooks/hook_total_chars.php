<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'gallery','audio','video','standard','link' ) );


function show_total_chars($c){
    $l = mb_strlen( $c );
    return $c."<hr> This article contains $l characters<hr>";
}
add_filter( 'the_content', 'show_total_chars' );