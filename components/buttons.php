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
        $to    = !empty($atts['to'])    ? $atts['to']    : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <span class="materializer">
            <a href="<?php echo $to; ?>" class="waves-effect waves-light btn <?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
          </span>
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
        $to    = !empty($atts['to'])    ? $atts['to']    : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <span class="materializer">
            <a href="<?php echo $to; ?>" class="waves-effect waves-light btn-floating btn-large
                                                <?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
          </span>
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
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        $links = parent::get_stripped_shortcodes($content, 'action');
        $stripped_content = parent::strip_shortcode($content, 'action');
        $action_links = $links[0];

        ob_start();
        ?>
          <div class="materializer">
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
              <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
              </a>
              <?php if($action_links !== NULL) { ?>
                  <ul>
                      <?php
                      foreach($action_links as $link) {
                          echo '<li>';
                          echo do_shortcode($link);
                          echo '</li>';
                      }
                      ?>
                  </ul>
              <?php } ?>
            </div>
          </div>
        <?php
        return ob_get_clean();
    }

    function fixedActionButtonAction($atts, $content) {
        $to    = isset($atts['to'])   ? $atts['to']   : '';
        $text  = isset($atts['text']) ? $atts['text'] : '';
        $color = isset($atts['color']) ? $atts['color'] : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <span class="materializer">
            <a class="btn-floating <?php echo $class; ?>" href="<?php echo $to; ?>">
                <span class="material-icons">
                    <?php echo $content ?>
                </span>
            </a>
          </span>
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
        $to    = !empty($atts['to'])    ? $atts['to']    : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <span class="materializer">
            <a href="<?php echo $to; ?>" class="waves-effect waves-light btn-flat <?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
          </span>
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
        $to    = !empty($atts['to'])    ? $atts['to']    : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
          <span class="materializer">
            <a href="<?php echo $to; ?>" class="waves-effect waves-light btn-large <?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
          </span>
        <?php
        return ob_get_clean();
    }

}
