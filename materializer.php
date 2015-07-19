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


/** Load Shortcodes **/
require_once "shortcodes.php";

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


