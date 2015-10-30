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
    public function linearPreloader($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';
        $width = !empty($atts['width'])  ? $atts['width']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <div class="materializer">
            <div class="progress <?php echo $class; ?>">
              <?php if($width === "") { ?>
                      <div class="indeterminate <?php echo $class; ?>"></div>
              <?php } else { ?>
                      <div class="determinate <?php echo $class; ?>"
                           style="width: <?php echo $width; ?>;"></div>
              <?php } ?>
            </div>
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
        $color = !empty($atts['color']) ? $atts['color'] : 'blue';

        if(!is_array($atts) || !in_array('flashing', $atts)) {
            ob_start();
            ?>
              <div class="materializer">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-<?php echo $color; ?>-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                </div>
              </div>
            <?php
            return ob_get_clean();

        } else {

            ob_start();
            ?>
              <div class="materializer">
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
              </div>
            <?php
            return ob_get_clean();
        }
    }

}
