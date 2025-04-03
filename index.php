<?php get_header(); ?>

<!-- Sección 1 -->
<?php include get_template_directory() . '/template-parts/section-one.php'; ?>

<!-- Sección 2 -->
<?php include get_template_directory() . '/template-parts/section-two.php'; ?>

<!-- Sección 3 (Condicional) -->
<?php 
// Esta sección solo se mostrará si el usuario está logueado
if (is_user_logged_in()) {
    include get_template_directory() . '/template-parts/section-three.php';
} else {
    echo '<div class="section section-three">
            <div class="container">
                <h2>Sección Tres (Condicional)</h2>
                <p>Esta sección solo es visible para usuarios que han iniciado sesión. ¡Inicia sesión para ver el contenido especial!</p>
            </div>
          </div>';
}
?>

<?php get_footer(); ?> 