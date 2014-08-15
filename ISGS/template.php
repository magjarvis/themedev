<?php

/**Tell Drupal 7 to look for a custom page template for each node type. 
*/

function isgs_preprocess_page(&$vars, $hook) {
    if (isset($vars['node'])) {
        $suggest = "page__node__{$vars['node']->type}";
        $vars['theme_hook_suggestions'][] = $suggest;
    }
}

function bb2html($text) {
  $bbcode = array(
                  "[strong]", "[/strong]",
                  "[b]",  "[/b]",
                  "[u]",  "[/u]",
                  "[i]",  "[/i]",
                  "[em]", "[/em]",
		  "[/br]"
                );
  $htmlcode = array(
                "<strong>", "</strong>",
                "<strong>", "</strong>",
                "<u>", "</u>",
                "<em>", "</em>",
                "</br>"
              );
  return str_replace($bbcode, $htmlcode, $text);
}
function bb_strip($text) {
  $bbcode = array(
                  "[strong]", "[/strong]",
                  "[b]",  "[/b]",
                  "[u]",  "[/u]",
                  "[i]",  "[/i]",
                  "[em]", "[/em]",
		  "[/br]"
                );
  return str_replace($bbcode, '', $text);
}

?>