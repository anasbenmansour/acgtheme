<?php
/**
 * @file
 * Goodnex's theme implementation to display a single Drupal page.
 */
?>

<div id="wrapper">
    <header id="header">
        <div class="container">

            <div class="eight columns">

                <?php if (render($page['header_left'])) : ?>
                  <?php print render($page['header_left']); ?>
                <?php endif; ?>

                <?php if ($logo): ?>
                  <div class="logo">
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                      </a>
                  </div>
                <?php endif; ?>

                <?php if ($site_name || $site_slogan): ?>
                  <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) {
                  print ' class="hidden"';
                } ?>>

  <?php if ($title): ?>
                        <div id="site-name"<?php if ($disable_site_name) {
      print ' class="hidden"';
    } ?>>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                        </div>
                      <?php else: /* Use h1 when the content title is empty */ ?>
                        <h1 id="site-name"<?php if ($disable_site_name) {
                      print ' class="hidden"';
                    } ?>>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                        </h1>
  <?php endif; ?>		
                  <?php if ($site_slogan): ?>
                        <div id="site-slogan"<?php if ($disable_site_slogan) {
                      print ' class="hidden"';
                    } ?>>
                <?php print $site_slogan; ?>
                        </div>
  <?php endif; ?>

                  </div> <!-- /#name-and-slogan -->
<?php endif; ?>

            </div>

            <?php //if (render($page['header_right'])) : ?>

            <div class="eight columns">



<?php print render($page['header_right']); ?>
            </div> 
                            <?php // endif; ?>

            <div class="clear"></div>

            <div class="sixteen columns">
                <div class="menu-container clearfix">
                    <nav id="navigation" class="navigation">
                        <div class="menu">
                    <?php print render($page['header_menu']); ?>
                        </div>  
                    </nav>

<?php if (render($page['header_search'])): ?>
                      <div class="search-wrapper">
      <?php print render($page['header_search']); ?>
                      </div><!--/ .search-wrapper--> 
<?php endif; ?>

                </div>
            </div>

        </div>  				
    </header>
                <?php print render($page['before_content_no_wrap']); ?>
    <section id="content">
        <div class="container">
            <?php if ($title) : ?>
              <div class="page-header clearfix">

              <?php if (($breadcrumb) AND ( theme_get_setting('breadcrumbs') == '1')): ?>
                    <div id="breadcrumbs"><?php print $breadcrumb; ?> </div>	
              <?php endif; ?>

                  <h1  style="text-align: center"><?php print $title; ?></h1>
              </div><!--/ .page-header-->
            <?php endif; ?>

            <?php print render($page['before_content']); ?>

                <?php if (($page['sidebar_left'])) : ?>
              <aside id="sidebar" class="four columns">
                  <?php print render($page['sidebar_left']); ?>
              </aside>
                    <?php endif; ?>

                    <?php if (($page['sidebar_right']) AND ( $page['sidebar_left'])): ?>
              <section id="main" class="eight columns">
                    <?php endif; ?>

                        <?php if ((($page['sidebar_right']) AND ( !$page['sidebar_left'])) OR ( $page['sidebar_left']) AND ( !$page['sidebar_right'])): ?>
                  <section id="main" class="twelve columns">
                    <?php endif; ?>

                    <?php print $messages; ?>

                        <?php if ($tabs = render($tabs)): ?>
                      <div id="drupal_tabs" class="tabs">
                      <?php print render($tabs); ?>
                      </div>
                    <?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                      <ul class="action-links">
                      <?php print render($action_links); ?>
                      </ul>
                    <?php endif; ?>

                <?php
                if (isset($page['content'])) {
                  if (drupal_is_front_page()) {
                    unset($page['content']['system_main']['default_message']);
                  }
                  print render($page['content']);
                }
                ?>

        <?php if (($page['sidebar_right']) OR ( $page['sidebar_left'])): ?>
                  </section>
            <?php endif; ?>

<?php if (($page['sidebar_right'])) : ?>
                  <aside id="sidebar" class="four columns">
  <?php print render($page['sidebar_right']); ?>
                  </aside>
        <?php endif; ?>

        </div>

    <?php if (render($page['after_content'])) : ?> 
          <div id="after-content" class="container">
  <?php print render($page['after_content']); ?>




          </div>
                <?php endif; ?>

    </section> 

            <?php print render($page['after_content_no_wrap']); ?>

    <footer id="footer">
        <div class="container">

            <?php if (isset($page['footer_1'])) : ?> 
              <div class="four columns">
  <?php print render($page['footer_1']); ?>
              </div>
                <?php endif; ?>

<?php if (isset($page['footer_2'])) : ?> 
              <div class="four columns">
              <?php print render($page['footer_2']); ?>
              </div>
            <?php endif; ?>

                <?php if (isset($page['footer_3'])) : ?> 

              <div class="four columns">
              <?php print render($page['footer_3']); ?>


              </div>

<?php endif; ?>

                    <?php if (isset($page['footer_4'])) : ?> 
              <div class="four columns">
                      <?php print render($page['footer_4']); ?>

              </div>
<?php endif; ?>

            <div class="clear"></div>

            <div class="sixteen columns">
                <div class="adjective clearfix">

<?php if (render($page['footer_bottom'])) : ?>
  <?php print render($page['footer_bottom']); ?>
<?php endif; ?>

                </div>
            </div>
        </div>  

    </footer>

</div>