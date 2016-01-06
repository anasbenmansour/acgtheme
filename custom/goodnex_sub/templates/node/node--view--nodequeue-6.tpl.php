

<article class="eight columns" data-categories="<?php print strip_tags(render($content['field_portfolio_category'])); ?>" >

    <?php if (render($content['field_image'])): ?>

      <div class="preloader">

          <?php
          $image_html = '<img src="' . image_style_url("partenaire", $node->field_image['und'][0]['uri']) . '" alt=""  >';
          $imlink = file_create_url($node->field_image['und'][0]['uri']);
          $link = l($image_html, $imlink, array('attributes' => array('class' => 'bwWrapper single-image plus-icon',), 'html' => TRUE));
          print $link;
          ?>	


      </div><!--/ .preloader-->
    <?php endif; ?>

    <aside class="project-meta" >

        <h6 class="title"><?php print $title; ?></h6>
        <span class="categories"><?php
           print $node->field_adresse['und'][0]['value'] . '<br>';
             print $node->field_numero_de_telephone['und'][0]['value'] . '&nbsp;-&nbsp;';
            print $node->field_fax['und'][0]['value'] . '<br>';
            print $node->field_email['und'][0]['email'];
            ?></span>

    </aside>>					





</article>

