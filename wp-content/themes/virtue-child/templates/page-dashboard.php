
<?php
/*
Template Name: Dashboard
*/


if (!current_user_can('manage_woocommerce') && !current_user_can('edit_posts')) {
    wp_redirect(site_url('/mi-cuenta/'));
    // wp_die('Esta página es privada, si necesitas acceso comunícate con el administrador');
} elseif (current_user_can('manage_woocommerce') || current_user_can('edit_posts') || !is_user_logged_in())  {
    $pagina_actual = esc_url(home_url($_SERVER['REQUEST_URI']));
    wp_redirect(wp_login_url($pagina_actual));
    exit;
}
// ... (código posterior)
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

<div class="dashboard-top-menu" style="display: flex; justify-content: space-between; padding: 10px;">
    <div class="site-switcher">
        <ul class="nav nav-tabs">
            <?php
            // Obtener todos los sitios de la red
            $sites = get_sites();
            $current_user_id = get_current_user_id();

            foreach ($sites as $site) {
                // Verificar si el usuario está registrado en este sitio
                if (is_user_member_of_blog($current_user_id, $site->blog_id)) {
                    $site_details = get_blog_details($site->blog_id);
                    $active = (get_current_blog_id() == $site->blog_id) ? 'active' : '';
                    ?>
                    <li class="<?php echo $active; ?>">
                        <a href="<?php echo esc_url($site_details->siteurl . "/dashboard/?section=dashboard-products"); ?>">
                            <?php echo esc_html($site_details->blogname); ?>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <div class="user-menu" style="text-align: right;">
        <button class="btn btn-primary" style="margin-left: 10px;" onclick="window.location.href='<?php echo site_url('/mi-cuenta'); ?>'">Ir a Panel Personal</button>
    </div>
</div>
<div class="dashboard-container">
    <?php get_template_part('templates/dashboard-menu'); 
    $section = get_query_var( 'section' );
    ?>
    <main class="dashboard-content" style="overflow-x: scroll;">
        <!-- Contenido principal del dashboard -->
        <?php get_template_part('templates/' . $section);
        ?>
    </main>
</div>

<?php get_footer(); ?>