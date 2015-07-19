<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Collapsibles extends MaterializerShortcodes {

    /**
     * Collapsible [collapsible_popout]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @type:        accordion/expandable (Default accordion)
     * @popout:      default false, optional true
     * @preselected: a preselected option
     */
    public function collapsible($atts, $content) {
        ob_start();
        ?>
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">First</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header">Second</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header">Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        <?php
        return ob_get_clean();
    }
}