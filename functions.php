<?php
function prueba_asdrubal_enrique_cuevas_scripts() {
    // Registrar y encolar CSS personalizado
    wp_enqueue_style(
        'prueba-asdrubal-custom-style',
        get_template_directory_uri() . '/css/custom.css',
        array(),
        '1.0.0'
    );

    // Registrar y encolar JavaScript personalizado
    wp_enqueue_script(
        'prueba-asdrubal-custom-script',
        get_template_directory_uri() . '/js/custom.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'prueba_asdrubal_enrique_cuevas_scripts'); 