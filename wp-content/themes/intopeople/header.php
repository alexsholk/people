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
                        <a href="#">Schrijf je in</a>
                        <a href="#">Voor onze e-nieuwsbrief</a>
                    </div>
                </div>
                <div class="middle-text">
                    <h1>
                        projectcoördinatie, consultancy<br>
                        en begeleiding van nearshore activiteiten
                    </h1>
                </div>
                <div class="bottom-text">
                    <p>Lees meer over onze ervaring in volgende richtingen:</p>
                    <div class="sub-menu">
                        <a href="#">Nearshore Development</a>
                        <a href="#">Payrolling</a>
                        <a href="#">Detachering</a>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>