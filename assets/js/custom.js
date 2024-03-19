// JavaScript for theme customization preview
jQuery( document ).ready( function( $ ) {
    // Update link color in real-time
    wp.customize( 'kat_theme_link_color', function( value ) {
        value.bind( function( new_color ) {
            $( 'a' ).css( 'color', new_color );
        } );
    } );

    // Update background color in real-time
    wp.customize( 'kat_theme_background_color', function( value ) {
        value.bind( function( new_color ) {
            $( 'body' ).css( 'background-color', new_color );
        } );
    } );

    // Update text color in real-time
    wp.customize( 'kat_theme_text_color', function( value ) {
        value.bind( function( new_color ) {
            $( 'body' ).css( 'color', new_color );
        } );
    } );
});
