<?php
/*
Plugin Name: Materializer
Plugin URI: http://codyreichert.github.io/materializer
Description: The Material Design components for WordPress
Author: Cody Reichert
Version: 0.2.0

Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

$pluginName = "Materializer";
$pluginVer  = "0.1.0";

/** Load Shortcodes **/
require_once "shortcodes.php";
require_once "components/buttons.php";
require_once "components/cards.php";
require_once "components/collapsible.php";
require_once "components/collections.php";
require_once "components/dropdown.php";
require_once "components/footer.php";
require_once "components/images.php";
require_once "components/pagination.php";
require_once "components/preloader.php";
require_once "components/tables.php";
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
add_shortcode('action',           array('Buttons', 'fixedActionButtonAction'));
add_shortcode('btn_flat',         array('Buttons', 'flatButton'));
add_shortcode('btn_large',        array('Buttons', 'largeButton'));

/** Cards */
add_shortcode('card',        array('Cards', 'basicCard'));
add_shortcode('card_img',    array('Cards', 'imageCard'));
add_shortcode('card_reveal', array('Cards', 'revealCard'));
add_shortcode('link',        array('Cards', 'actionLink'));
add_shortcode('card_open',   array('Cards', 'cardRevealOpenContent'));

/** Collapsibles */
add_shortcode('collapsible',      array('Collapsibles', 'collapsible'));
add_shortcode('collapsible_item', array('Collapsibles', 'collapsibleItem'));

/** Collections */
add_shortcode('collection',      array('Collections', 'collection'));
add_shortcode('collection_item', array('Collections', 'collectionItem'));
add_shortcode('collection_link', array('Collections', 'collectionLink'));

/** Dropdowns */
add_shortcode('dropdown',      array('Dropdowns', 'dropdown'));
add_shortcode('dropdown_item', array('Dropdowns', 'dropdownItem'));

/** Footer */
add_shortcode('footer', array('Footers', 'footer'));

/** Images */
add_shortcode('img_responsive', array('Images', 'responsiveImage'));
add_shortcode('img_circle',     array('Images', 'circularImage'));
add_shortcode('img_box',        array('Images', 'imageBox'));

/** Pagination */
add_shortcode('pagination', array('Paginations', 'pagination'));
add_shortcode('pag_item',   array('Paginations', 'paginationItem'));

/** Preloaders */
add_shortcode('preloader_linear',   array('Preloaders', 'linearPreloader'));
add_shortcode('preloader_circular', array('Preloaders', 'circularPreloader'));

/** Tables */
add_shortcode('table', array('Tables', 'basicTable'));

/** Videos */
add_shortcode('video',       array('Videos', 'externalVideo'));
add_shortcode('video_html5', array('Videos', 'localVideo'));
