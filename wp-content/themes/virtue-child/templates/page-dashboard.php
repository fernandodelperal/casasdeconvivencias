
<?php
/*
Template Name: Dashboard
*/
if (!is_user_logged_in()) {
    wp_redirect(site_url('/mi-cuenta/'));
    exit;
}
if (!current_user_can('manage_woocommerce')) {
    wp_die('Esta página es privada, si necesitas acceso comunícate con el administrador');
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

<div class="dashboard-top-menu" style="display: flex; justify-content: space-between; padding: 10px;">
    <div class="site-switcher">
        <form action="" method="get">
            <select name="site_switch" onchange="this.form.submit()">
                <?php
                $sites = get_sites();
                foreach ($sites as $site) {
                    $site_details = get_blog_details($site->blog_id);
                    if (current_user_can('manage_woocommerce', $site->blog_id)) {
                        $selected = (get_current_blog_id() == $site->blog_id) ? 'selected' : '';
                        echo '<option value="' . esc_url($site_details->siteurl) . '" ' . $selected . '>' . esc_html($site_details->blogname) . '</option>';
                    }
                }
                ?>
            </select>
        </form>
    </div>
    <div class="user-menu" style="text-align: right;">
        <button class="btn btn-primary" style="margin-left: 10px;" onclick="window.location.href='<?php echo site_url('/mi-cuenta'); ?>'">Panel Personal</button>
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