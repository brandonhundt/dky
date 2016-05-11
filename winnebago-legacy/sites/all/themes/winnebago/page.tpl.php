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
      <a name="s1" class="anchor"></a>
      <div class="container">
       <?php print $messages; ?>
       <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
       <?php print render($page['section_first']); ?>
      </div>
    </div>
    <?php if ($page['section_second']): ?><div class="section second"><a name="s2" class="anchor"></a><div class="container"><?php print render($page['section_second']); ?></div></div><?php endif; ?>
    <?php if ($page['section_third']): ?><div class="section third"><a name="s3" class="anchor"></a><div class="container"><?php print render($page['section_third']); ?></div></div><?php endif; ?>
    <?php if ($page['section_fourth']): ?><div class="section fourth"><a name="s4" class="anchor"></a><div class="container"><?php print render($page['section_fourth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_fifth']): ?><div class="section fifth"><a name="s5" class="anchor"></a><div class="container"><?php print render($page['section_fifth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_sixth']): ?><div class="section sixth"><a name="s6" class="anchor"></a><div class="container"><?php print render($page['section_sixth']); ?></div></div><?php endif; ?>
    <?php if ($page['section_seventh']): ?><div class="section seventh"><a name="s7" class="anchor"></a><div class="container"><?php print render($page['section_seventh']); ?></div></div><?php endif; ?>
  </section> <!-- /#main -->

</div> <!-- /#container -->
<footer id="footer" role="contentinfo" class="clearfix">
  <div class="container">
  <?php print render($page['footer']) ?>
  <p>&copy;<?php print date("Y")?> Winnebago - All Rights Reserved</p>
  </div>
</footer> <!-- /#footer -->
