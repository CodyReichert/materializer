<?php
/*
Plugin Name: Materializer
Plugin URI: https://wpmaterializer.com
Description: The Material Design components for WordPress
Author: Materializer
Version: 0.1.0

Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

$pluginName = "Materializer";
$pluginVer = "0.1.0";

/** Load Shortcodes **/
require_once "shortcodes.php";
require_once "components/buttons.php";
require_once "components/cards.php";
require_once "components/collapsible.php";
require_once "components/collections.php";
require_once "components/dropdown.php";
require_once "components/footer.php";
require_once "components/images.php";
require_once "components/navbar.php";
require_once "components/pagination.php";
require_once "components/preloader.php";
require_once "components/sidenav.php";
require_once "components/tables.php";
require_once "components/tabs.php";
require_once "components/videos.php";

class MaterializerBase {

    public static function enqueueClientStyles() {

        wp_register_style( 'M-Style-Bundle',
            plugins_url('scripts/dist/Materializer-bundle.css', __FILE__)
        );
        wp_enqueue_style('M-Style-Bundle');

    }

    public static function enqueueClientScripts() {

        wp_register_script('M-Script-bundle',
            plugins_url('scripts/dist/Materializer-bundle.js', __FILE__)
        );
        wp_enqueue_script('M-Script-bundle');

    }

}

/** Enqueue Styles and Scripts **/
add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientStyles' ));
add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientScripts'));


/** Buttons */
add_shortcode('btn',              array('Buttons', 'raisedButton'));
add_shortcode('btn_floating',     array('Buttons', 'floatingButton'));
add_shortcode('btn_fixed_action', array('Buttons', 'fixedActionButton'));
add_shortcode('btn_flat',         array('Buttons', 'flatButton'));
add_shortcode('btn_large',        array('Buttons', 'largeButton'));

/** Cards */
add_shortcode('card',        array('Cards', 'basicCard'));
add_shortcode('card_img',    array('Cards', 'imageCard'));
add_shortcode('card_reveal', array('Cards', 'revealCard'));
add_shortcode('card_panel',  array('Cards', 'panelCard'));
add_shortcode('link',        array('Cards', 'actionLink'));
add_shortcode('card_open',   array('Cards', 'cardRevealOpenContent'));

/** Collapsibles */
add_shortcode('collapsible', array('Collapsibles', 'collapsible'));

/** Collections */
add_shortcode('collection',         array('Collections', 'collection'));
add_shortcode('collection_links',   array('Collections', 'collectionLinks'));
add_shortcode('collection_avatars', array('Collections', 'collectionAvatars'));

/** Dropdowns */
add_shortcode('dropdown', array('Dropdowns', 'dropdown'));

/** Footer */
add_shortcode('footer', array('Footers', 'footer'));

/** Images */
add_shortcode('img_responsive', array('Images', 'responsiveImage'));
add_shortcode('img_circle',     array('Images', 'circularImage'));

/** Navbar */
add_shortcode('navbar', array('Navigation', 'navbar'));

/** Pagination */
add_shortcode('pagination', array('Paginations', 'pagination'));

/** Preloaders */
add_shortcode('preloader_linear',   array('Preloaders', 'linearPreloader'));
add_shortcode('preloader_circular', array('Preloaders', 'circularPreloader'));

/** Side Navs */
add_shortcode('sidenav', array('SideNavs', 'sideNav'));

/** Tables */
add_shortcode('table', array('Tables', 'basicTable'));

/** Tabs */
add_shortcode('tabs', array('Tabs', 'tabsShortcode'));

/** Videos */
add_shortcode('video',       array('Videos', 'externalVideo'));
add_shortcode('video_html5', array('Videos', 'localVideo'));
