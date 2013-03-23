<?php
$title = __('Browse Exhibits by Tag');
echo head(array('title' => $title, 'bodyid' => 'exhibit', 'bodyclass' => 'tags'));
?>
<h1><?php echo $title; ?></h1>

<ul class="items-nav navigation" id="secondary-nav">
    <?php echo nav(array(
            array(
                'label' => __('Browse All'),
                'uri' => url('exhibits/browse')
            ),
            array(
                'label' => __('Browse by Tag'),
                'uri' => url('exhibits/tags')
            )
        )
    ); ?>
</ul>

<?php echo tag_cloud($tags, 'exhibits/browse'); ?>

<?php echo foot(); ?>
