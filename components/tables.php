<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Tables extends MaterializerShortcodes {

    /**
     * Dropdown [card]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @style:       bodered/striped/hoverable/centered/responsive
     */
    public function basicTable($atts, $content) {
        $style = $atts['style'] ? $atts['style'] : '';
        $text  = $atts['style'] ? $atts['style'] : '';
        $color = $atts['style'] ? $atts['style'] : '';

        $class = "$style $text $color";

        ob_start();
        ?>
          <div class="materializer">
            <table class="<?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </table>
          </div>
        <?php
        return ob_get_clean();

    }

}
