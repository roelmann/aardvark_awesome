<?php echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>"><?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">

<!-- END OF HEADER -->

    <div id="content" class="clearfix">
        <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
    </div>

<!-- START OF FOOTER -->
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>