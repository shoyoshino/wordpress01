    <?php get_header(); ?>
    <?php echo 'index.php' ?>
    <h1>Hello World</h1>
    <?php echo get_stylesheet_uri(); ?>
    <br />
    <?php echo home_url(); ?>
    <br />
    <?php echo get_template_directory_uri(); ?>
    <br />
    <?php get_footer(); ?>
    <br />
    <?php echo have_posts(); ?>
    <br />
    <h2>お知らせ</h2>
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