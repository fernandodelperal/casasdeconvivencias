
<?php


if (!is_user_logged_in()) {
    wp_redirect(site_url('/mi-cuenta/'));
    exit;
}
get_header();
?>
<style>
.dashboard-container {
    display: flex;
    margin: 20px; /* Ajusta el valor según tus necesidades */
}
.dashboard-menu {
    flex: 0 0 200px; /* Ajusta el ancho del menú según tus necesidades */
}
.dashboard-content {
    flex: 1;
    margin-left: 20px; /* Espacio entre el menú y el contenido */
}
</style>

<div class="dashboard-container">
    <?php get_template_part('templates/dashboard-menu'); 
    $section = get_query_var( 'section' );
    ?>
    <main class="dashboard-content">
        <!-- Contenido principal del dashboard -->
        <?php get_template_part('templates/' . $section);
        ?>
    </main>
</div>

<?php get_footer(); ?>