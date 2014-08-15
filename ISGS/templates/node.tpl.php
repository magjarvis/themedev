<?php

/**
 *
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h1><?php print $title_attributes; ?><?php print $title; ?> <?php print render($content['field_first_name']); ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print "Updated by " . $name . " on " . date( "F j, Y",$node->created); ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
