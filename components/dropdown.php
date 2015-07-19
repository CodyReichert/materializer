<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Dropdowns extends MaterializerShortcodes {

    /**
     * Dropdown [card]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     */
    public function dropdown( $atts ) {
        $title = $atts['title'];
        ob_start();
        ?>
            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider"></li>
              <li><a href="#!">three</a></li>
            </ul>
        <?php
        return ob_get_clean();

    }
}