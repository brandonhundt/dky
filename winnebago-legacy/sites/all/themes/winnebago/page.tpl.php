  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>

  <header id="header" role="banner" class="clearfix">
    <div class="container clearfix">
      <nav role="navigation" class="main-menu left">
         <?php print render($page['navigation']); ?>
      </nav>  

        <hgroup id="site-name-slogan">
          <?php if ($site_name): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        </hgroup>

      <nav role="navigation" class="main-menu right">
         <?php print render($page['header']); ?>
      </nav>  
  
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

</div> <!-- /#container -->
