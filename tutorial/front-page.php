<?php get_header(); ?>
<?php echo 'front-page.php' ?>
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
<h2>制作実績</h2>
<?php
$args = array(
    'post_type' => 'works', //投稿タイプスラッグ
    'posts_per_page' => 3
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
    <ul>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo cfs()->get('thumbnail'); ?>" alt=""><br />
                    業種：<?php echo cfs()->get('type'); ?><br />
                    クライアント：<?php echo cfs()->get('client'); ?>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>
<div>
    <a href="<?php echo home_url(); ?>/works">一覧を見る</a>
</div>

<br />
<?php my_hook(); ?>
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
                    <span><?php echo the_excerpt(); ?></span>
                </a>
            </li>
    <?php endwhile;
    endif; ?>
</ul>