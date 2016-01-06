
<?php
$items = field_get_items('node', $node, 'field_imagesfooter');


$img_count = 0;
$counter = count($items);
?><div class="preloader" style="background-image: none">

    <?php while ($img_count < $counter) { ?>

      <?php
      $image_html = '<img src="' . image_style_url("footerimages", $node->field_imagesfooter['und'][$img_count]['uri']) . '">';
      $imlink = file_create_url($node->field_imagesfooter['und'][$img_count]['uri']);
      $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon', 'style' => 'display:inline-block',), 'html' => TRUE));
      print $link;
      ?>	




      <?php $img_count++; ?>
    <?php }
    ?></div> 







