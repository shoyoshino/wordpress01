<?php get_header(); ?>
<?php echo 'page.php' ?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
<?php
    endwhile;
endif;
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>