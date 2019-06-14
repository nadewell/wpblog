<?php
/**
 * The Custom wp_nav_menu walker class 
 *
 * This is the template that modify wp_nav_menu output
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NadeWp
 * @since 1.0
 * @version 1.0
 */
?>
<?php

class Primary_Nav extends Walker_Nav_Menu {
  
  /**
   * Starts the list before the elements are added.
   *
   * Adds classes to the unordered list sub-menus.
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   */
  function start_lvl( &$output, $depth = 0, $args = array() ) {
      // Depth-dependent classes.
      $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
      $display_depth = ( $depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu dropdown-menu',
      );
      $class_names = implode( ' ', $classes );

      // Build HTML for output.
      $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
  }

  /**
   * Start the element output.
   *
   * Adds main/sub-classes to the list items and links.
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param object $item   Menu item data object.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   * @param int    $id     Current item ID.
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

      // Depth-dependent classes.
      $depth_classes = array(
          ( $depth == 0 ? 'nav-item main-menu-item ' : 'nav-item sub-menu-item' ),
          ( in_array('menu-item-has-children', $item->classes) ) ? 'dropdown' : '',
          ( in_array('current-menu-item', $item->classes) ) ? 'active' : ''
      );
      $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

      // Passed classes.
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

      // Build HTML.
      $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

      // Link attributes.
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url ) .'"' : '';
      $attributes .= ' class="nav-link ' . ( in_array('menu-item-has-children', $item->classes) ? 'dropdown-toggle' : '' ) . '"';
      $attributes .= in_array('menu-item-has-children', $item->classes) ? ' id="nav_menu_item_'   . esc_attr( $item->ID ) .'"' : '';
      $attributes .= in_array('menu-item-has-children', $item->classes) ? ' role="button"' : '';
      $attributes .= in_array('menu-item-has-children', $item->classes) ? ' data-toggle="dropdown"' : '';
      $attributes .= in_array('menu-item-has-children', $item->classes) ? ' aria-haspopup="true"' : '';
      $attributes .= in_array('menu-item-has-children', $item->classes) ? ' aria-expanded="false"' : '';

      // Build HTML output and pass through the proper filter.
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
          $args->before,
          $attributes,
          $args->link_before,
          apply_filters( 'the_title', $item->title, $item->ID ),
          $args->link_after,
          $args->after
      );
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}