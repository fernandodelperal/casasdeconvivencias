
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

<div class="dashboard-top-menu" style="display: flex; justify-content: space-between; padding: 10px;">
    <div class="site-switcher">
        <form action="" method="get">
            <select name="site_switch" onchange="this.form.submit()">
                <?php
                $sites = get_sites();
                foreach ($sites as $site) {
                    $site_details = get_blog_details($site->blog_id);
                    $selected = (get_current_blog_id() == $site->blog_id) ? 'selected' : '';
                    echo '<option value="' . esc_url($site_details->siteurl) . '" ' . $selected . '>' . esc_html($site_details->blogname) . '</option>';
                }
                ?>
            </select>
        </form>
    </div>
    <div class="user-menu" style="text-align: right;">
        <a href="<?php echo esc_url(site_url('/mi-cuenta/')); ?>">Mi Cuenta</a>
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