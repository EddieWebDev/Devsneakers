<nav class="header-nav">
    <div class="header-title">
        <h1>
        <?php echo get_bloginfo( 'name' ); ?>
        </h1>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
</nav>