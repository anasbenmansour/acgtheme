
<li class="four columns">
 

    <?php if (render($content['field_image'])): ?> 
    
      <div class="preloader">
          <?php
          $image_html = '<img src="' . image_style_url("monstyle", $node->field_image['und'][0]['uri']) . '" alt="" width="220" height="153" rel="jcarousel">';
          $imlink = file_create_url($node->field_image['und'][0]['uri']);
          $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
          print $link;
          ?>	

      </div><!--/ .preloader-->
    <?php endif; ?>		

    <?php
    $path = '<h6 class="title">' . $title . '</h6> '
        . '<span class="categories">' . str_replace(' ', ' / ', strip_tags(render($content['field_acttags']))) . '</span>	 ';

    $linknode = "nodequeue/6";
    $link = l($path, $linknode, array('attributes' => array('class' => 'project-meta',), 'html' => TRUE));
    print $link;
    ?>


</li>

