<?php get_header() ?>
<?php echo 'archive-works.php' ?>
<ul>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>">
                    <span><?php echo get_the_date('Y.m.d') ?></span>
                    <span><?php echo the_title(); ?></span>
                </a>
            </li>
    <?php endwhile;
    endif; ?>
</ul>
<?php get_footer() ?>