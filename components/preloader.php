<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Preloaders extends MaterializerShortcodes {

    /**
     * Linear Preloader [preloader_linear]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @percentage:  a % of the bar to fill (default is indeteriminate, which just keeps moving
     */
    public function linearPreloader($atts) {
        ob_start();
        ?>
            <div class="progress">
                <div class="determinate" style="width: 70%"></div>
            </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Circular Preloader [preloader_circular]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @flashing:    change through all the colors
     */
    public function circularPreloader($atts) {
        if(!$atts['flashing']) {
            ob_start();
            ?>
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                </div>
            <?php
            return ob_get_clean();

        } else {

            ob_start();
            ?>
                <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>

                  <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
            <?php
            return ob_get_clean();
        }
    }

}