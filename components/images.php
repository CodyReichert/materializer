<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Images extends MaterializerShortcodes {

    /**
     * Responsive Image [img_responsive]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @sticky:       true/false (Default false)
     */
    public function responsiveImage($atts) {
        ob_start();
        ?>
            <img class="responsive-img" src="https://simplyrets.com/images/logo_button.png" />
        <?php
        return ob_get_clean();
    }

    /**
     * Circular Image [img_circle]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @sticky:       true/false (Default false)
     */
    public function circularImage($atts) {
        ob_start();
        ?>
            <img class="responsive-img circle" src="https://simplyrets.com/images/scrot1.png" />
        <?php
        return ob_get_clean();
    }
}
