<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Dropdowns extends MaterializerShortcodes {

    /**
     * Dropdown [card]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     */
    public function dropdown($atts, $content) {
        $name  = !empty($atts['name'])    ? $atts['name']  : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        $items = parent::get_stripped_shortcodes($content, 'dropdown_item');
        $stripped_content = parent::strip_shortcode($content, 'dropdown_item');
        $dd_items = $items[0];

        ob_start();
        ?>
          <span class="materializer">
            <a class='dropdown-button btn <?php echo $class; ?>'
               href='<?php echo $to; ?>' data-activates='<?php echo $name; ?>'>
                <?php echo do_shortcode($stripped_content); ?>
            </a>
            <?php if($dd_items !== NULL) { ?>
                <ul id='<?php echo $name; ?>' class='dropdown-content <?php echo $class; ?>'>
                    <?php
                    foreach($dd_items as $item) {
                        echo '<li>';
                        echo do_shortcode($item);
                        echo '</li>';
                    }
                    ?>
                </ul>
            <?php } ?>
          </span>
        <?php
        return ob_get_clean();

    }

    public function dropdownItem($atts, $content) {
        $to    = !empty($atts['to'])    ? $atts['to']    : '#';
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
            <a class="<?php echo $class; ?>" href="<?php echo $to; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
        <?php
        return ob_get_clean();

    }
}
