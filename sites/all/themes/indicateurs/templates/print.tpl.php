<?php

/**
 * @file
 * Default print module template
 *
 * @ingroup print
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $print['language']; ?>" xml:lang="<?php print $print['language']; ?>">
  <head>
    <?php print $print['head']; ?>
    <?php print $print['base_href']; ?>
    <title><?php print $print['title']; ?></title>
    <?php print $print['scripts']; ?>
    <?php print $print['sendtoprinter']; ?>
    <?php print $print['robots_meta']; ?>
    <?php print $print['favicon']; ?>
    <?php print $print['css']; ?>
    <style type='text/css' media='all'>
	  @import url("http://indicateurs-biodiversite.naturefrance.fr/sites/default/files/fontyourface/fontsquirrel/cabin-fontfacekit/stylesheet.css");
      @import url("http://indicateurs-biodiversite.naturefrance.fr/sites/default/files/fontyourface/fontsquirrel/cabinsketch-fontfacekit/stylesheet.css");
    </style>
  </head>
  <body>
    <?php if (!empty($print['message'])) {
      print '<div class="print-message">'. $print['message'] .'</div><p />';
    } ?>
    <div class="print-logo"><?php print $print['logo']; ?></div>
    <div class="print-site_name"><?php print $print['site_name']; ?></div>
    <div class="print-source_url"><?php print $print['source_url']; ?></div>
    <p />

    <hr class="print-hr" />
    <div class="print-content"><?php print $print['content']; ?></div>
    <div class="print-footer"><?php print $print['footer_message']; ?></div>
     </body>
</html>
