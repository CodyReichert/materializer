<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Collapsibles extends MaterializerShortcodes {

    /**
     * Collapsible [collapsible_popout]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @type:        accordion/expandable (Default accordion)
     * @popout:      default false, optional true
     * @preselected: a preselected option
     */
    public function collapsible($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';
        $type  = !empty($atts['type'])  ? $atts['type']  : 'expandable';
        $style = !empty($atts['style']) ? $atts['style'] : '';

        $class = $style . " " . $color . " " . $text . "-text";

        $items = parent::get_stripped_shortcodes($content, 'collapsible_item');
        $stripped_content = parent::strip_shortcode($content, 'collapsible_item');

        $collapsible_items = $items[0];

        ob_start();
        ?>
          <span class="materializer">
            <ul class="collapsible <?php echo $class; ?>" data-collapsible="<?php echo $type; ?>">
                <?php if(!empty($collapsible_items)) { ?>
                    <?php foreach($collapsible_items as $item) { ?>
                        <li>
                            <?php echo do_shortcode($item); ?>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
          </span>
        <?php
        return ob_get_clean();
    }

    public function collapsibleItem($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';
        $title = !empty($atts['title']) ? $atts['title'] : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
            <div class="collapsible-header <?php echo $class; ?>">
                <?php echo $title; ?>
            </div>
            <div class="collapsible-body <?php echo $class; ?>"><p>
                <?php echo do_shortcode($content); ?>
            </p></div>
        <?php
        return ob_get_clean();
    }

}
