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


add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientStyles' ));
add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientScripts'));


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


class MaterializerShortcodes {

    public function basicCard( $atts ) {
        $title = $atts['title'];
        ob_start();
        ?>
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $title; ?></span>
                        <p>
                            I am a very simple card. I am good at
                            containing small bits of information. I
                            am convenient because I require little
                            markup to use effectively.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

add_shortcode('m_card', array('MaterializerShortcodes', 'basicCard'));
