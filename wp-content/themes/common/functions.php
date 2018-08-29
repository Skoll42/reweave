<?php

function bt_include_php_files_from_dir($path, $recursive = false)
{
    if (is_dir($path)) {
        $dir = new \DirectoryIterator($path);

        foreach ($dir as $file) {
            if ($file->isDot()) continue; // Skip . and ..

            if ($recursive && $file->isDir()) {
                bt_include_php_files_from_dir($file->getPath().'/'.$file->getFilename(), $recursive);
            }

            if ($file->isFile()) {
                $file_extension = pathinfo($file->getFilename(), PATHINFO_EXTENSION);

                if ($file_extension === 'php') {
                    include_once $file->getPath().'/'.$file->getBasename();
                }
            }

        }
    }
}

function bt_register_widgets_from_dir($path)
{
    if (is_dir($path)) {
        $dir = new \DirectoryIterator($path);

        foreach ($dir as $file) {
            if ($file->isDot()) continue; // Skip . and ..

            if ($file->isFile()) {
                $file_extension = pathinfo($file->getFilename(), PATHINFO_EXTENSION);

                if ($file_extension === 'php') {
                    include_once $file->getPath().'/'.$file->getBasename();
                    $widget_class = sprintf('%s_Widget', $file->getBasename('.' . $file_extension));

                    add_action('widgets_init', function() use ($widget_class) {
                        register_widget($widget_class);
                    });
                }
            }

        }
    }
}


define('NIX_THEME_DIR', __DIR__);
define('NIX_THEME_PLUGINS_DIR', NIX_THEME_DIR . '/plugins');
define('NIX_THEME_MODULES_DIR', NIX_THEME_DIR . '/modules');

bt_include_php_files_from_dir(NIX_THEME_PLUGINS_DIR, true);

if (is_admin()) {
    foreach (glob(NIX_THEME_MODULES_DIR . '/*/admin', GLOB_ONLYDIR) as $folder) {
        bt_include_php_files_from_dir($folder);
    }
}

foreach (glob(NIX_THEME_MODULES_DIR . '/*/front', GLOB_ONLYDIR) as $folder) {
    bt_include_php_files_from_dir($folder);
}

foreach (glob(NIX_THEME_MODULES_DIR . '/*/widgets', GLOB_ONLYDIR) as $folder) {
    bt_register_widgets_from_dir($folder);
}




function nix_get_rev() {
    $rev_file = APP_PATH . 'rev.txt';
    return file_exists($rev_file) ? trim(file_get_contents($rev_file)) : time();
}

class Reweave_Walker_Nav_Menu extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . '<span>' . $title . '</span>' . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

add_action( 'init', function() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
} );

function custom_upload_mimes($mimes = array()) {
    $mimes['svg'] = "image/svg";

    return $mimes;
}

add_action('upload_mimes', 'custom_upload_mimes');




