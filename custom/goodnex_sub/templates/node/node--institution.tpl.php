
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php if ($display_submitted): ?>
        <div class="entry-meta">
            <?php if (theme_get_setting('meta_date') == '1') : ?><span class="date"><?php print $date; ?></span><?php endif; ?>
            <?php if (theme_get_setting('meta_author') == '1') : ?><span class="author"><?php echo t('By'); ?> <?php print $name; ?></span><?php endif; ?>
            <?php if ((render($content['field_acttags'])) AND ( theme_get_setting('meta_tags')) == '1'): ?>  
                <span class="tag"><?php print render($content['field_acttags']);
                ?></span>
            <?php endif; ?>  

        </div><!--/ .entry-meta-->
    <?php endif; ?>
    <?php if ($teaser): ?>




        <div class="preloader">



            <?php
            $image_html = '<img src="' . file_create_url($node->field_image['und'][0]['uri']) . '" alt="" width="600px" height="400px">';
            $imlink = 'node/' . $node->nid;
            $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image link-icon',), 'html' => TRUE));
            print $link;
            ?>	
        </div>
    <?php endif; ?>



    <?php if (!$teaser): ?>





        <div class="preloader">

            <?php
            $image_html = '<img src="' . file_create_url($node->field_image['und'][0]['uri']) . '" alt="" width="600px" height="400px">';
            $imlink = file_create_url($node->field_image['und'][0]['uri']);
            $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
            print $link;
            ?>	



        </div>
    <?php endif; ?>


    <div class="entry">




        <div class="content"<?php print $content_attributes; ?>>
            <?php
// We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_image']);
            hide($content['field_widget_image']);

            print render($content);
            ?>
        </div>




    </div>



    <?php print render($content['comments']); ?>
</article>