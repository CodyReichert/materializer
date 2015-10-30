<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Paginations extends MaterializerShortcodes {

    /**
     * Pagination [pagination]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     */
    public function pagination($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        $items = parent::get_stripped_shortcodes($content, 'pag_item');
        $stripped_content = parent::strip_shortcode($content, 'pag_item');

        $pag_items = $items[0];

        ob_start();
        ?>
          <span class="materializer">
            <ul class="pagination <?php echo $class; ?>">
                <?php
                if(!empty($pag_items)) {
                    foreach($pag_items as $item) {
                        echo do_shortcode($item);
                    }
                }
                ?>
            </ul>
          </span>
        <?php
        return ob_get_clean();
    }

    public function paginationItem($atts, $content) {
        $to    = !empty($atts['to']) ? $atts['to'] : '#!';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $disabled = in_array('disabled', $atts) ? "disabled" : '';
        $active = in_array('active', $atts) ? "active" : '';

        $class = $color . " " . $text . "-text " . $disabled . " " . $active;

        ob_start();
        ?>
            <li class="waves-effect <?php echo $class; ?>">
                <a href="<?php echo $to; ?>">
                    <?php echo do_shortcode($content); ?>
                </a>
            </li>
        <?php
        return ob_get_clean();
    }

}
