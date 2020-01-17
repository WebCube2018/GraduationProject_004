<?php get_header();
the_post(); ?>
    <h1 class="title-page">
        <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
<?php get_footer(); ?>

