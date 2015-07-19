<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Tabs extends MaterializerShortcodes {

    /**
     * Tabs [tabs][/tabs]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     */
    public function tabsShortcode($atts) {
        ob_start();
        ?>
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s3"><a href="#test1">Test 1</a></li>
                  <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                  <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
                  <li class="tab col s3"><a href="#test4">Test 4</a></li>
                </ul>
              </div>
              <div id="test1" class="col s12">Test 1</div>
              <div id="test2" class="col s12">Test 2</div>
              <div id="test3" class="col s12">Test 3</div>
              <div id="test4" class="col s12">Test 4</div>
            </div>
        <?php
        return ob_get_clean();

    }

}