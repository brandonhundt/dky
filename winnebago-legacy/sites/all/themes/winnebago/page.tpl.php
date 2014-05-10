

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>

  <header id="header" role="banner" class="clearfix">
    <div class="container clearfix">
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="site-name-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>

    <?php print render($page['header']); ?>

    <?php if ($main_menu || $secondary_menu || !empty($page['navigation'])): ?>
      <nav id="navigation" role="navigation" class="clearfix">
        <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
        <?php if (empty($page['navigation'])): ?>
		  <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
		  <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'id' => 'secondary-menu',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Secondary menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        <?php endif; ?>
      </nav> <!-- /#navigation -->
    <?php endif; ?>
  
    </div>
  </header> <!-- /#header -->

  <section id="main" role="main" class="clearfix">
    
    <a id="main-content"></a>
    <div class="section first">
      <div class="container">
       <?php print $messages; ?>
       <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
       <?php print render($page['section_first']); ?>
      </div>
    </div>
    <?php if ($page['section_second']): ?><div class="section second"><div class="container"><?php print render($page['section_second']); ?></div></div><?php endif; ?>
    <?php if ($page['section_third']): ?><div class="section third"><div class="container"><?php print render($page['section_third']); ?></div></div><?php endif; ?>
    <?php if ($page['section_fourth']): ?><div class="section fourth"><div class="container"><?php print render($page['section_fourth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_fifth']): ?><div class="section fifth"><div class="container"><?php print render($page['section_fifth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_sixth']): ?><div class="section sixth"><div class="container"><?php print render($page['section_sixth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_seventh']): ?><div class="section seventh"><div class="container"><?php print render($page['section_seventh']); ?></div></div><?php endif; ?>
    <?php if ($page['section_eigth']): ?><div class="section eigth"><div class="container"><?php print render($page['section_eigth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_ninth']): ?><div class="section ninth"><div class="container"><?php print render($page['section_ninth']); ?></div></div><?php endif; ?>
  </section> <!-- /#main -->

  <footer id="footer" role="contentinfo" class="clearfix">
    <div class="container">
      <?php print render($page['footer']) ?>
    </div>
  </footer> <!-- /#footer -->

</div> <!-- /#container -->
