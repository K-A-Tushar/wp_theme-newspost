<?php
function theme_name_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Left', 'theme_name' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the first column of the footer.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Middel', 'theme_name' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown in the second column of the footer.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Right', 'theme_name' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown in the third column of the footer.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_name_widgets_init' );