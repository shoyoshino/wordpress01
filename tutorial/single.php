<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_date('Y.m.d') ?> | <?php the_category(','); ?></div>
        <?php the_content(); ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>