<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Collections extends MaterializerShortcodes {

    /**
     * Collection [collection]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     */
    public function collection($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';
        $type  = !empty($atts['type'])  ? $atts['type']  : '';

        $class = $color . " " . $text . "-text";

        $items = parent::get_stripped_shortcodes($content, 'collection_item');
        $stripped_content = parent::strip_shortcode($content, 'collection_item');

        $collection_items = $items[0];

        if($type === "") {
            ob_start();
            ?>
              <span class="materializer">
                <ul class="collection <?php echo $class; ?>">
                    <?php
                    if(!empty($collection_items)) {
                        foreach($collection_items as $item) {
                            echo do_shortcode($item);
                        }
                    }
                    ?>
                </ul>
              </span>
            <?php
            return ob_get_clean();
        }
        if($type === "links") {
            $links = preg_replace("/collection_item/", "collection_link", $collection_items);

            ob_start();
            ?>
              <span class="materializer">
                <div class="collection <?php echo $class; ?>">
                    <?php
                    if(!empty($links)) {
                        foreach($links as $link) {
                            echo do_shortcode($link);
                        }
                    }
                    ?>
                </div>
              </span>
            <?php
            return ob_get_clean();
        }
    }

    public function collectionItem($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
                <li class="collection-item <?php echo $class; ?>">
                    <?php echo do_shortcode($content); ?>
                </li>
        <?php
        return ob_get_clean();
    }

    /**
     * Link Collection [collection_links]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @active:      a preselected active item
     */
    public function collectionLink($atts, $content) {
        $color = !empty($atts['color']) ? $atts['color'] : '';
        $text  = !empty($atts['text'])  ? $atts['text']  : '';
        $to    = !empty($atts['to'])    ? $atts['to']      : '';

        $class = $color . " " . $text . "-text";

        ob_start();
        ?>
            <a href="<?php echo $to; ?>" class="collection-item <?php echo $class; ?>">
                <?php echo do_shortcode($content); ?>
            </a>
        <?php
        return ob_get_clean();
    }

}
