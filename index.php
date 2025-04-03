<?php get_header(); ?>

<main>
    <?php 
    // Sección 1
    get_template_part('template-parts/section', 'one');
    
    // Sección 2
    get_template_part('template-parts/section', 'two');
    
    // Sección 3 (condicional)
    if (is_front_page()) {
        get_template_part('template-parts/section', 'three');
    }
    ?>
</main>

<?php get_footer(); ?> 