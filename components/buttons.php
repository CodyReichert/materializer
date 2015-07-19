<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Buttons extends MaterializerShortcodes {

    /**
     * Raised button [btn]
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     background color
     * @textColor: text color
     * @disabled:  disabled (default false)
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
     * Floating Button [btn_floating]
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     background color
     * @textColor: text color
     * @disabled:  disabled (default false)
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

    /**
     * Fixed Action Button [btn_fixed_action]
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     background color
     * @textColor: text color
     * @disabled:  disabled (default false)
     */
    public function fixedActionButton($atts, $content) {
        ob_start();
        ?>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
          </a>
          <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
          </ul>
        </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Flat Button [btn_flat]
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     background color
     * @textColor: text color
     * @disabled:  disabled (default false)
     */
    public function flatButton($atts, $content) {
        ob_start();
        ?>
            <a href="#" class="waves-effect waves-light btn-flat">
                Button
            </a>
        <?php
        return ob_get_clean();
    }

    /**
     * Large Button [btn_large]
     * Available Attributes:
     * @waves:     true (default/dark), light, false
     * @to:        the element/page to link
     * @color:     background color
     * @textColor: text color
     * @disabled:  disabled (default false)
     */
    public function largeButton($atts, $content) {
        ob_start();
        ?>
            <a href="#" class="waves-effect waves-light btn-large">
                Button
            </a>
        <?php
        return ob_get_clean();
    }

}
