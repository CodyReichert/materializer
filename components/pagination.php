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
    public function pagination($atts) {
        ob_start();
        ?>
            <ul class="pagination">
                <li class="disabled"><a href="#!"><</a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">></a></li>
            </ul>
        <?php
        return ob_get_clean();
    }

}