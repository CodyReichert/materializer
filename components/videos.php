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
        ob_start();
        ?>
          <div class="video-container">
             <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
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
        ob_start();
        ?>
            <video class="responsive-video" controls>
                <source src="movie.mp4" type="video/mp4">
            </video>
        <?php
        return ob_get_clean();

    }

}
