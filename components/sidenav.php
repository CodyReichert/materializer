<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class SideNavs extends MaterializerShortcodes {


    // TODO: There's a bunch of options to add here

    /**
     * Linear Preloader [preloader_linear]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @percentage:  a % of the bar to fill (default is indeteriminate, which just keeps moving
     */
    public function sideNav($atts) {
        ob_start();
        ?>
            <nav>
              <ul class="right hide-on-med-and-down">
                <li><a href="#!">First Sidebar Link</a></li>
                <li><a href="#!">Second Sidebar Link</a></li>
              </ul>
              <ul id="slide-out" class="side-nav">
                <li><a href="#!">First Sidebar Link</a></li>
                <li><a href="#!">Second Sidebar Link</a></li>
              </ul>
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </nav>
        <?php
        return ob_get_clean();
    }


}