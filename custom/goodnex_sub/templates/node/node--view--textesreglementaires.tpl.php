

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php if ($display_submitted): ?>
      <div class="entry-meta">
          <?php if (theme_get_setting('meta_date') == '1') : ?><span class="date"><?php print $date; ?></span><?php endif; ?>
          <?php if (theme_get_setting('meta_author') == '1') : ?><span class="author"><?php echo t('Par'); ?> <?php print $name; ?></span><?php endif; ?>
          <?php if ((render($content['field_tags'])) AND ( theme_get_setting('meta_tags')) == '1'): ?>  
            <span class="tag"><?php print render($content['field_tags']);
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


    <div class="entry">




        <div class="content"<?php print $content_attributes; ?>>
            <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_image']);
            hide($content['field_widget_image']);
             hide($content['language']);
            print '<h2>' . $title . '</h2>';
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