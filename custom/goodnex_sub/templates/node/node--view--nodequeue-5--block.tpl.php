

<article class="eight columns" data-categories="<?php print strip_tags(render($content['field_portfolio_category'])); ?>" >

    <?php if (render($content['field_image'])): ?>

        <div class="preloader">

            <?php
            $image_html = '<img src="' . image_style_url("institution", $node->field_image['und'][0]['uri']) . '" alt=""  >';
            $imlink = file_create_url($node->field_image['und'][0]['uri']);
            $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
            print $link;
            ?>	


        </div><!--/ .preloader-->
    <?php endif; ?>



    <?php
    $path = '<h6 class="title">' . $title . '</h6> ';


    $linknode = "node/" . $node->nid;
    $link = l($path, $linknode, array('attributes' => array('class' => 'project-meta',), 'html' => TRUE));
    print $link;
    ?>






</article>

