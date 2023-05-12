<?php get_header(); ?>
<?php
/*
Template Name: サービスページ
*/
?>
<?php echo 'page-service.php' ?>
<?php
the_title();
?>
<ul>
    <li>1.<?php echo cfs()->get('s_title_1'); ?>
        <div><?php echo cfs()->get('s_head_1'); ?></div>
        <div><?php echo cfs()->get('s_descri_1'); ?></div>
        <img src="<?php echo cfs()->get('img'); ?>" alt="">
    </li>
    <li>2.<?php echo cfs()->get('s_title_2'); ?>
        <div><?php echo cfs()->get('s_head_2'); ?></div>
        <div><?php echo cfs()->get('s_descri_2'); ?></div>
        <img src="<?php echo cfs()->get('img_2'); ?>" alt="">
    </li>
    <li>SEOコンサルティング</li>
</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>