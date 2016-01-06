<?php
$summary = field_view_field('node', $node, 'field_detail_info', array(
  'label' => 'hidden',
  'type' => 'text_summary_or_trimmed',
  'settings' => array('trim_length' => 120),
    ));
?>

<div class="four columns">




    <a href="<?php print $node->field_detail_url['und'][0]['value']; ?>">
        <div class="detail-box">

            <div class="detail-entry">

                <?php if (render($content['field_detail_icon'])): ?>

                  <i class="detail-icon <?php print $node->field_detail_icon['und'][0]['value']; ?> "></i>
                <?php endif; ?>


                <h5><?php print $node->field_detail_caption['und'][0]['value']; ?></h5>

                <p>
                    <?php print render($summary);
                    ; ?>
                </p>

            </div><!--/ .detail-entry-->

            <div data-color-state="<?php if ((render($content['field_detail_color'])) AND ( render($content['field_detail_color_type']) == 'Background')): ?>#<?php print render($content['field_detail_color']); ?><?php endif; ?>" data-color-hover="<?php if ((render($content['field_detail_color'])) AND ( render($content['field_detail_color_type']) == 'Hover')): ?>#<?php print render($content['field_detail_color']); ?><?php endif; ?>" class="transform"></div>

        </div><!--/ .detail-box-->
    </a>



</div><!--/ .columns-->