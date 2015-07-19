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
    public function basicTable( $atts ) {
        // TODO: Probably allow this to accept multiple
        $style = $atts['style'] ? $atts['style'] : '';
        ob_start();
        ?>
            <table class="<?php echo $style; ?>">
              <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                  <td>$0.87</td>
                </tr>
                <tr>
                  <td>Alan</td>
                  <td>Jellybean</td>
                  <td>$3.76</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                  <td>$7.00</td>
                </tr>
              </tbody>
            </table>
        <?php
        return ob_get_clean();

    }

}
