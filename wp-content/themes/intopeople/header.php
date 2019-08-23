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
	        <?php wp_nav_menu( array(
	                'theme_location' => 'top',
                    'container' => false,
	                'items_wrap'      => '<nav id="%1$s" class="%2$s">%3$s</nav>'
            ) ) ?>

            <?php /*
            <nav class="main-menu">

                <a href="about.php"<?php echo $selected == 1 ? ' class="active"' : '' ?>>Over Ons</a>
                <a href="development.php"<?php echo $selected == 2 ? ' class="active"' : '' ?>>Nearshore Development</a>
                <a href="payrolling.php"<?php echo $selected == 3 ? ' class="active"' : '' ?>>Payrolling</a>
                <a href="detachering.php"<?php echo $selected == 4 ? ' class="active"' : '' ?>>Detachering</a>
                <a href="contact.php" class="contact<?php echo $selected == 5 ? ' active' : '' ?>">Contact</a>
            </nav>
 */ ?>
            <a href="#" class="lang lang-<?php echo 'nl' ?>"></a>
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