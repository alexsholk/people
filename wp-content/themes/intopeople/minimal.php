<?php /* Template Name: Minimal */ ?>
<?php get_header() ?>
    <div class="main-container">
        <div>
            <div class="main-wrap">
                <div class="middle-width centered extra-margin-bottom">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();