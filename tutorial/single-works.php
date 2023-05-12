<?php echo 'single-works.php'; ?>
<div>
    <img src="<?php echo cfs()->get('thumbnail'); ?>" alt="">
</div>
<br />
業種：<?php echo cfs()->get('type'); ?>
<br />
クライアント：<?php echo cfs()->get('client'); ?>
<br />
ワークフロー<?php echo cfs()->get('workflow'); ?>
<br />
成果<?php echo cfs()->get('results'); ?>
<br />
<div><?php echo cfs()->get('link'); ?></div>