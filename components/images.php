<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Images extends MaterializerShortcodes {

    /**
     * Responsive Image [img_responsive]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @sticky:       true/false (Default false)
     */
    public function responsiveImage($atts) {
        $src    = !empty($atts['src']) ? $atts['src'] : '#';
        $class  = !empty($atts['class']) ? $atts['class'] : '';
        $width  = !empty($atts['width']) ? $atts['width'] : '';
        $height = !empty($atts['height']) ? $atts['height'] : '';

        ob_start();
        ?>
          <span class="materializer">
            <img class="responsive-img <?php echo $class; ?>"
                 width="<?php echo $width; ?>"
                 height="<?php echo $height; ?>"
                 src="<?php echo $src; ?>" />
          </span>
        <?php
        return ob_get_clean();
    }

    /**
     * Circular Image [img_circle]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @sticky:       true/false (Default false)
     */
    public function circularImage($atts) {
        $src    = !empty($atts['src']) ? $atts['src'] : '#';
        $class  = !empty($atts['class']) ? $atts['class'] : '';
        $width  = !empty($atts['width']) ? $atts['width'] : '';
        $height = !empty($atts['height']) ? $atts['height'] : '';

        ob_start();
        ?>
          <span class="materializer">
            <img class="responsive-img circle <?php echo $class; ?>"
                 width="<?php echo $width; ?>"
                 height="<?php echo $height; ?>"
                 src="<?php echo $src; ?>" />
          </span>
        <?php
        return ob_get_clean();
    }


    public function imageBox($atts) {
        $src     = !empty($atts['src']) ? $atts['src'] : '#';
        $class   = !empty($atts['class']) ? $atts['class'] : '';
        $width   = !empty($atts['width']) ? $atts['width'] : '';
        $height  = !empty($atts['height']) ? $atts['height'] : '';
        $caption = !empty($atts['caption']) ? $atts['caption'] : '';

        ob_start();
        ?>
          <span class="materializer">
            <img class="materialboxed <?php echo $class; ?>"
                 width="<?php echo $width; ?>"
                 height="<?php echo $height; ?>"
                 data-caption="<?php echo $caption; ?>"
                 src="<?php echo $src; ?>" />
          </span>
        <?php
        return ob_get_clean();
    }

}
