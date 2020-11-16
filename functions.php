<?php

register_sidebar( array(
    'name'          => __( 'Main Sidebar', 'dossier' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'dossier' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
) );


register_nav_menus( array(
            'primary_menu' => __( 'Main Menu', 'dossier' ),
            'footer_menu'  => __( 'Footer Menu', 'dossier' ),
            'social_menu'  => __( 'Social Menu', 'dossier' )
        ) );

?>