<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Cards extends MaterializerShortcodes {

    public function basicCard( $atts ) {
        $title = $atts['title'];
        ob_start();
        ?>
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?php echo $title; ?></span>
                        <p>
                            I am a very simple card. I am good at
                            containing small bits of information. I
                            am convenient because I require little
                            markup to use effectively.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
        <?php
        return ob_get_clean();
    }

}