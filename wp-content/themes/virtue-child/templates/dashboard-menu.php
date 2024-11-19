
<aside class="dashboard-menu">
    <ul class="menu-list">
        <li><a href="<?php echo site_url('/dashboard/?section=dashboard-start'); ?>">Inicio</a></li>
        <li><a href="<?php echo site_url('/dashboard/?section=dashboard-products'); ?>">Actividades</a></li>
        <li><a href="<?php echo site_url('/dashboard?section=dashboard-orders'); ?>">Pedidos</a></li>
        <li><a href="<?php echo site_url('/dashboard/?section=dashboard-tutorials'); ?>">Tutoriales</a></li>
        <li><a href="<?php echo site_url('/dashboard/?section=dashboard-users'); ?>">Personas</a></li>
    </ul>
</aside>

<style>
    .dashboard-menu {
        width: 250px;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .menu-list {
        list-style-type: none;
        padding: 0;
    }
    .menu-list li {
        margin-bottom: 15px;
    }
    .menu-list a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
        font-weight: bold;
        display: block;
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .menu-list a:hover {
        background-color: #e2e6ea;
    }
</style>