<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <title><?php the_title() ?></title>
	<?php wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700&display=swap' ) ?>
	<?php wp_enqueue_style('style', get_stylesheet_uri()) ?>
	<?php wp_head() ?>
</head>
<body>
    <div class="header<?php echo is_front_page() ? '' : ' header-minimal' ?>">
        <div class="main-wrap">
            <a class="logo" href="<?php echo get_home_url() ?>"></a>
	        <?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => false, 'menu_class' => 'main-menu' ) ) ?>
            <?php if (is_front_page()): ?>
                <div class="top-text">
                    <div class="sub-menu">
                        <a href="#"><?php _e('Sign up for our newsletter', 'intopeople') ?></a>
                    </div>
                </div>
                <div class="middle-text">
                    <h1>
                        <?php _e('Project Coordination, Consulting<br>and management of oursourced activities', 'intopeople') ?>
                    </h1>
                </div>
                <div class="bottom-text">
                    <p><?php _e( 'Read more about our experience in the following areas', 'intopeople' ) ?></p>
	                <?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => false, 'menu_class' => 'sub-menu' ) ) ?>
                </div>
            <?php endif ?>
        </div>
    </div>