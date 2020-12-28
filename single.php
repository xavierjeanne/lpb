<?php get_header(); ?>
<section class="entry-section">
    <div class="col-6">
        test
    </div>
    <div class="col-6">
        super
    </div>
    <?php
    if (have_posts()): the_post();
        get_template_part('template-parts/post/content', 'single');
    endif;
    ?>

    <?php wp_link_pages(); ?>
</section>
<?php get_footer(); ?>
