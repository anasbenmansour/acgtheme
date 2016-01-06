<?php
$summary = field_view_field('node', $node, 'field_detail_info', array(
  'label' => 'hidden',
  'type' => 'text_summary_or_trimmed',
  'settings' => array('trim_length' => 120),
    ));
?>

<div class="four columns">

    <?php
   /* 
     $image_html = '<div class="detail-box"><div class="detail-entry">
      <i class="detail-icon ' . $node->field_detail_icon['und'][0]['value'] . '"></i>'
      . '<h5>' . $node->field_detail_caption['und'][0]['value'] . '</h5>'
      . '<p>' . render($summary) . '</p></div>';

      $link = '<div data-color-state="'.((render($content['field_detail_color'])) AND ( $node->field_detail_color_type['und'][0]['value']) == 'Background') ? '#'.$node->field_detail_color['und'][0]['jquery_colorpicker'].'"
      data-color-hover="'.((render($content['field_detail_color'])) AND ( $node->field_detail_color_type['und'][0]['value']) == 'Hover') ? '#'.$node->field_detail_color['und'][0]['jquery_colorpicker'].'"
      class="transform">
      </div>'  ;

    $imlink = $node->field_detail_url['und'][0]['value'];
      $link2 = l($image_html, $imlink, array('attributes' => array('class' => 'sss',), 'html' => TRUE));
      print $link2; 
     */
     
    ?>	


    
    <a href="<?php print $node->field_detail_url['und'][0]['value']; ?>">
        <div class="detail-box">

            <div class="detail-entry">

                <?php if (render($content['field_detail_iconn'])): ?>

                  <i class="detail-icon <?php print $node->field_detail_iconn['und'][0]['value']; ?> "></i>
                <?php endif; ?>


                <h5><?php print $node->field_detail_caption['und'][0]['value']; ?></h5>

                <p>
                    <?php print render($summary); ?>

                </p>

            </div>

            <div data-color-state="<?php if ((render($content['field_detail_color'])) AND ( $node->field_detail_color_type['und'][0]['value']) == 'Background'): ?><?php print '#' . $node->field_detail_color['und'][0]['jquery_colorpicker']; ?><?php endif; ?>"
                 data-color-hover="<?php if ((render($content['field_detail_color'])) AND ( $node->field_detail_color_type['und'][0]['value']) == 'Hover'): ?><?php print '#' . $node->field_detail_color['und'][0]['jquery_colorpicker']; ?><?php endif; ?>"
                 class="transform"></div>

        </div><!--/ .detail-box-->
    </a>
</div>



