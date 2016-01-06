<?php
/**
 * @file node--flexslider.tpl.php
 * Goodnex's node template for the Image Slider content type.
 */
?>

<li>

    <?php if (render($content['field_image'])): ?>  

        <div class="preloader">

            <div class="bwWrapper">

                <img src="<?php echo image_style_url("flexstyle", $node->field_image['und'][0]['uri']); ?>">
            </div>
        </div>
    <?php endif; ?>
    <?php if (render($content['field_caption'])): ?> 

        <section class="caption">
            <h4><?php print $title; ?></h4>
            <?php print render($node->field_caption['und'][0] ['value']); ?>
        </section>
    <?php endif; ?>
</li>