<?php get_header() ?>
<div class="main-container">
	<?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
	            the_content();
            endwhile;
        endif;
	?>
    <?php get_template_part('contact-form') ?>
</div>
<?php get_footer();