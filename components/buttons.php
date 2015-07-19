<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Buttons extends MaterializerShortcodes {

    /**
     * Raised button
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     the element/page to link
     * @textColor: the element/page to link
     */
    public function raisedButton($atts, $content) {
        ob_start();
        ?>
            <a href="#" class="waves-effect waves-light btn">
                Button
            </a>
        <?php
        return ob_get_clean();
    }


    /**
     * Raised button
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     the element/page to link
     * @textColor: the element/page to link
     */
    public function floatingButton($atts, $content) {
        ob_start();
        ?>
            <a href="#" class="btn-floating btn-large waves-effect waves-light red">
               <i class="material-icons">add</i>
            </a>
        <?php
        return ob_get_clean();
    }

}
