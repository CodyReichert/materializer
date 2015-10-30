<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Cards extends MaterializerShortcodes {

    /**
     * Basic Card [card]
     * Available Attributes:
     * @title:       Title of the card
     * @color:       Background color
     * @text:        Text color
     * @size:        Small/medium/large
     * @title_color: Text color of the tile
     */
    public function basicCard($atts, $content) {
        $title      = isset($atts['title'])       ? $atts['title']       : '';
        $color      = isset($atts['color'])       ? $atts['color']       : '';
        $text       = isset($atts['text'])        ? $atts['text']        : '';
        $titleColor = isset($atts['title_color']) ? $atts['title_color'] : '';

        $links = parent::get_stripped_shortcodes($content, 'link');
        $stripped_content = parent::strip_shortcode($content, 'link');

        $action_links = $links[0];

        ob_start();
        ?>
          <div class="materializer">
            <div class="card <?php echo $color . " " . $text . "-text" ; ?>">
                <div class="card-content">
                    <span class="card-title <?php echo $titleColor . "-text" ?>">
                        <?php echo $title; ?>
                    </span>
                    <p>
                        <?php echo do_shortcode($stripped_content); ?>
                    </p>
                </div>
                <?php if($action_links !== NULL) { ?>
                    <div class="card-action">
                        <?php
                              foreach($action_links as $link) {
                                  echo do_shortcode($link);
                              }
                        ?>
                    </div>
                <?php } ?>
            </div>
          </div>
        <?php
        return ob_get_clean();
    }

    public function actionLink($atts, $content) {
        $to   = isset($atts['to'])   ? $atts['to']   : '';
        $text = isset($atts['text']) ? $atts['text'] : '';
        ob_start();
        ?>
            <a class="<?php echo $text . "-text"; ?>" href="<?php echo $to ; ?>">
                <?php echo $content ?>
            </a>
        <?php
        return ob_get_clean();
    }

    public function cardRevealOpenContent($atts, $content) {
        $text = isset($atts['text']) ? $atts['text'] : '';

        ob_start();
        ?>
            <p class="<?php echo $text . "-text"; ?>">
                <?php echo do_shortcode($content); ?>
            </p>
        <?php
        return ob_get_clean();
    }

    /**
     * Image Card [card_img]
     * Available Attributes:
     * @img:         The background image
     * @actionLink:  Card action links
     * @color:       background color
     * @textColor:   text color
     * @size:        small/medium/large
     */
    public function imageCard($atts, $content) {
        $img   = isset($atts['img'])   ? $atts['img']   : '';
        $color = isset($atts['color']) ? $atts['color'] : '';
        $text  = isset($atts['text'])  ? $atts['text']  : '';

        $links = parent::get_stripped_shortcodes($content, 'link');
        $stripped_content = parent::strip_shortcode($content, 'link');

        $action_links = $links[0];

        ob_start();
        ?>
          <div class="materializer">
            <div class="card <?php echo $color . " " . $text . "-text" ; ?>">
                <div class="card-image">
                    <img src="<?php echo $img; ?>">
                </div>
                <div class="card-content">
                    <p>
                        <?php echo do_shortcode($stripped_content); ?>
                    </p>
                </div>
                <?php if($action_links !== NULL) { ?>
                    <div class="card-action">
                        <?php
                            foreach($action_links as $link) {
                                echo do_shortcode($link);
                            }
                        ?>
                    </div>
                <?php } ?>
            </div>
          </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Reveal Card [card_reveal]
     * Available Attributes:
     * @img:         The background image
     * @actionLink:  Card action links
     * @color:       background color
     * @textColor:   text color
     * @size:        small/medium/large
     */
    public function revealCard($atts, $content) {
        $title      = isset($atts['title'])       ? $atts['title']       : '';
        $color      = isset($atts['color'])       ? $atts['color']       : '';
        $text       = isset($atts['text'])        ? $atts['text']        : '';
        $img        = isset($atts['img'])         ? $atts['img']         : '';
        $titleColor = isset($atts['title_color']) ? $atts['title_color'] : '';
        $more_icon  = isset($atts['more_icon'])   ? $atts['more_icon']   : '^';
        $less_icon  = isset($atts['less_icon'])   ? $atts['less_icon']   : 'X';

        $open_content = parent::get_stripped_shortcodes($content, 'card_open');
        $stripped_content = parent::strip_shortcode($content, 'card_open');

        ob_start();
        ?>
          <div class="materializer">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://simplyrets.com/images/scrot1.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <?php echo $title; ?>
                        <i class="right"><?php echo $more_icon; ?></i>
                    </span>
                    <p>
                        <?php echo do_shortcode($stripped_content); ?>
                    </p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">
                        <?php echo $title; ?>
                        <i class="right"><?php echo $less_icon; ?></i>
                    </span>
                    <?php echo do_shortcode($open_content[0][0]); ?>
              </div>
            </div>
          </div>
        <?php
        return ob_get_clean();
    }

}
