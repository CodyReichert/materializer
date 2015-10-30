<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Videos extends MaterializerShortcodes {

    /**
     * video [video]
     * Available Attributes:
     * @color:       Background color
     * @textColor:   Text color
     * @link:        Link to video
     */
    public function externalVideo($atts) {
        $src         = !empty($atts['src'])         ? $atts['src']          : '#!';
        $width       = !empty($atts['width'])       ? $atts['width']        : '';
        $height      = !empty($atts['height'])      ? $atts['height']       : '';
        $frameborder = !empty($atts['frameborder']) ? $atts['frameborder']  : '';
        $nocontrols  = is_array($atts) && in_array('no-controls', $atts) ? 'no-controls' : '';
        $fullscreen  = is_array($atts) && in_array('fullscreen', $atts) ? 'allowfullscreen' : '';

        ob_start();
        ?>
          <div class="materializer">
            <div class="video-container <?php echo $nocontrols; ?>">
                <iframe width="<?php echo $width; ?>"
                        height="<?php echo $height ?>"
                        src="<?php echo $src; ?>"
                        frameborder="<?php echo $frameborder; ?>"
                        <?php echo $fullscreen; ?>>
                </iframe>
            </div>
          </div>
        <?php
        return ob_get_clean();
    }


    /**
     * HTML5 Video [video_html5 source="my-vide.mp4"]
     * Available Attributes:
     * @color:       Background color
     * @textColor:   Text color
     * @sources:     Link to local video sources
     */
    public function localVideo($atts) {
        $src         = !empty($atts['src'])         ? $atts['src']          : '#!';
        $width       = !empty($atts['width'])       ? $atts['width']        : '';
        $height      = !empty($atts['height'])      ? $atts['height']       : '';
        $nocontrols  = is_array($atts) && in_array('no-controls', $atts) ? 'no-controls' : 'controls';

        ob_start();
        ?>
          <div class="materializer">
            <video class="responsive-video"
                   height="<?php echo $height ?>"
                   width="<?php echo $width; ?>"
                   <?php echo $nocontrols ?>>
                <source src="movie.mp4" type="video/mp4">
            </video>
          </div>
        <?php
        return ob_get_clean();

    }

}
