<div id="wrapper">

  <header id="header">
    <a href="<?php print $front_page;?>">
      <img src="/drupal7-photo/<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" height="80" width="80" />
    </a>
 
    <?php if ($main_menu): ?>
      <?php print theme('links', $main_menu); ?>
    <?php endif; ?>
    <?php print render($page['header']); ?>

  </header>
 
  <div id="main">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>


  <footer id="footer">
    <?php if ($page['footer']): ?>    
      <?php print render($page['footer']); ?>
    <?php endif; ?>
    <p>Painting icon by <a href="https://thenounproject.com/WSTMN/">Mikael Westman</a> from the Noun Project.</p>
  </footer>

</div>