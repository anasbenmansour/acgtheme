<?php
/**
 * @file node.tpl.php
 * Goodnex's template to display a node.
 */
$uid = user_load($node->uid);

if (module_exists('profile2')) {
  $profile = profile2_load_by_user($uid, 'main');
}
$image_slide = "";

if ($items = field_get_items('node', $node, 'field_image')) {
  if (count($items) == 1) {
    $image_slide = 'false';
  } elseif (count($items) > 1) {
    $image_slide = 'true';
  }
}

$img_count = 0;
$counter = count($items);
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php if ($display_submitted): ?>
      <div class="entry-meta">
          <?php if (theme_get_setting('meta_date') == '1') : ?><span class="date"><?php print $date; ?></span><?php endif; ?>
          <?php if (theme_get_setting('meta_author') == '1') : ?><span class="author"><?php echo t('By'); ?> <?php print $name; ?></span><?php endif; ?>
          <?php if ((render($content['field_acttags'])) AND ( theme_get_setting('meta_tags')) == '1'): ?>  
            <span class="tag"><?php print render($content['field_acttags']);
            ?></span>
          <?php endif; ?>  
          <?php if (theme_get_setting('meta_comments') == '1') : ?>
            <span class="comments">
                <?php
                echo l(format_plural($comment_count, t('@count comment'), t('@count comments')), 'node/' . $node->nid, array('fragment' => 'comments'));
                ?>

            </span>
          <?php endif; ?>
      </div><!--/ .entry-meta-->
    <?php endif; ?>
    <?php if ($teaser): ?>

      <?php if (($image_slide == 'true')): ?>
        <div class="image-post-slider">
            <ul>
                <?php //for ($img_count=0; $img_count < count($items); $img_count++) {  ?>
                <?php while ($img_count < $counter) { ?>
                  <li>
                      <div class="preloader">

                          <?php
                          $image_html = '<img src="' . file_create_url($node->field_image['und'][$img_count]['uri']) . '" alt="" width="600px" height="400px">';
                          $imlink = 'node/' . $node->nid;
                          $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image link-icon',), 'html' => TRUE));
                          print $link;
                          ?>	

                      </div>
                  </li>
                  <?php
                  $img_count++;
                }
                ?>		
            </ul>
        </div>    
      <?php endif; ?>

      <?php if ($image_slide == 'false'): ?>
        <div class="preloader">



            <?php
            $image_html = '<img src="' . file_create_url($node->field_image['und'][0]['uri']) . '" alt="" width="600px" height="400px">';
            $imlink = 'node/' . $node->nid;
            $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image link-icon',), 'html' => TRUE));
            print $link;
            ?>	
        </div>
      <?php endif; ?>

    <?php endif; ?>

    <?php if (!$teaser): ?>

      <?php if (($image_slide == 'true')): ?>
        <div class="image-post-slider">
            <ul>
                <?php while ($img_count < $counter) { ?>
                  <li>
                      <div class="preloader">

                          <?php
                          $image_html = '<img src="' . file_create_url($node->field_image['und'][$img_count]['uri']) . '" alt="" width="600px" height="400px" rel="gallery">';
                          $imlink = file_create_url($node->field_image['und'][$img_count]['uri']);
                          $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
                          print $link;
                          ?>	     

                      </div>
                  </li>
                  <?php
                  $img_count++;
                }
                ?>		
            </ul>
        </div>    
      <?php endif; ?>

      <?php if ($image_slide == 'false'): ?>

        <div class="preloader">

            <?php
            $image_html = '<img src="' . file_create_url($node->field_image['und'][0]['uri']) . '" alt="" width="600px" height="400px">';
            $imlink = file_create_url($node->field_image['und'][0]['uri']);
            $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
            print $link;
            ?>	



        </div>
      <?php endif; ?>

    <?php endif; ?>



    <div class="entry">




        <div class="content"<?php print $content_attributes; ?>>
            <?php
// We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_image']);
            hide($content['field_widget_image']);
             hide($content['language']);
            print render($content);
            ?>
        </div>

        <?php if ($teaser): ?>
          <?php
          $linknode = 'node/' . $node->nid;
          $link = l(t('read more'), $linknode, array('attributes' => array('class' => 'button default small',), 'html' => TRUE));
          print $link;
          ?>

        <?php endif; ?>


    </div>



    <?php print render($content['comments']); ?>
</article>