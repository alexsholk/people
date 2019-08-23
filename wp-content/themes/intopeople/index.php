<?php get_header() ?>
<div class="main-container">
	<?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
	            the_title( '<h2>', '</h2>' );
	            the_content();
                // Display post content
            endwhile;
        endif;
	?>
	<?php ///require '_intro.php' ?>
	<?php //require '_clients.php' ?>
	<?php //require '_contact_form.php' ?>
</div>
<?php get_footer();