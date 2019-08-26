    <div class="footer">
        <div class="main-wrap">
            <a class="logo" href="<?php echo get_home_url() ?>"></a>
	        <?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => false, 'menu_class' => 'social-links' ) ) ?>
        </div>
    </div>
    <?php wp_footer() ?>
</body>
</html>