<?php
    
    function my_theme_scripts() {
        // Anexar la hoja de estilos principal
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        // Anexar todas las hojas de estilo restantes
        wp_enqueue_style( 'plugins', get_template_directory_uri().'/assets/css/plugins.min.css');
        wp_enqueue_style( 'template', get_template_directory_uri().'/assets/css/template.css');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        // Anexar los ficheros de JS
        wp_register_script( 'plugins-js', get_template_directory_uri().'/assets/js/plugins.min.js', null, null, true );
        wp_enqueue_script( 'plugins-js' );
        
        wp_register_script( 'custom-js', get_template_directory_uri().'/assets/js/custom.min.js', null, null, true);
        wp_enqueue_script( 'custom-js' ); 
        
        wp_register_script( 'jquery-js', get_template_directory_uri().'/assets/js/jquery.min.js', null, null, false);
        wp_enqueue_script( 'jquery-js' ); 
        
        wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script( 'bootstrap-js' ); 
        
        wp_register_script( 'popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery-js' ), null, true);
        wp_enqueue_script( 'popper-js' ); 
    }
    add_action('wp_enqueue_scripts', 'my_theme_scripts');

    // Habilitar imágenes destacadas
    add_theme_support( 'post-thumbnails' );


    /**
     * funcion para obetener url de las template terciarias, obteniendo el id
     */

    // Bucle predeterminado

    /*function (){
        if(have_post()):
            while(have_post()):
                the_post();
            endwhile;
        else:
            echo "No posts published yet";
        endif;
    }*/
    
/**
 * Retrieve a page object giving its title
 * @param $title String page title
 * @return $page Object Page object
 */

    function get_page_object( $title ){
    $args = array(
        'title'          => $title,          // Page title
        'post_type'      => 'page',          // Only pages type post
        'posts_per_page' => 1,               
        'post_status'    => 'publish',       // Only the published pages
    );

    $query = new WP_Query( $args );

    if ( !empty( $query->post ) ):
        $page = $query->post;
    
    else:
        $page = null;
    endif;

    
    wp_reset_postdata();

    return $page;
}

    