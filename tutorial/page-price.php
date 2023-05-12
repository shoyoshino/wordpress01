<?php get_header(); ?>
<?php
/*
Template Name: 料金案内ページ
*/
?>
<?php echo 'page-price.php' ?>
<?php the_title(); ?>
<ul>
    <li><?php echo cfs()->get('p_title_1'); ?> - <?php echo cfs()->get('p_price_1'); ?></li>
    <li><?php echo cfs()->get('p_title_2'); ?> - <?php echo cfs()->get('p_price_2'); ?></li>
    <li><?php echo cfs()->get('p_title_3'); ?> - <?php echo cfs()->get('p_price_3'); ?></li>
</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>