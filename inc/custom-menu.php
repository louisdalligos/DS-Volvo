<?php
/**
 * ds-volvo Custom Menu
 *
 * @package ds-volvo
 */

class Nav_Header_Walker_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array())
  {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<div class=\"mega-menu\"><div class=\"container\"><ul class=\"list-unstyled\">\n";
  }

  function end_lvl(&$output, $depth = 0, $args = array())
  {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</ul></div></div>\n";
  }
}
