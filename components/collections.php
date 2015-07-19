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
        ob_start();
        ?>
            <ul class="collection">
                <li class="collection-item">
                    Alvin
                </li>
                <li class="collection-item">
                    And The
                </li>
                <li class="collection-item">
                    Chipmunks
                </li>
            </ul>
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
    public function collectionLinks($atts, $content) {
        ob_start();
        ?>
            <div class="collection">
                <a href="#" class="collection-item"> Alvin </a>
                <a href="#" class="collection-item"> And The </a>
                <a href="#" class="collection-item"> Chipmunks </a>
            </div>
        <?php
        return ob_get_clean();
    }


    /**
     * Avatar Collection [collection_avatars]
     * Available Attributes:
     * @color:       background color
     * @textColor:   text color
     * @active:      a preselected active item
     */
    public function collectionAvatars($atts, $content) {
        ob_start();
        ?>
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
            </ul>
        <?php
        return ob_get_clean();
    }

}
