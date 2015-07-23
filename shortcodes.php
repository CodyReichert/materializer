<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class MaterializerShortcodes {

    public function spliceColor($color) {
        return $color;
    }

    /**
     * Parse $content for shortcodes matching $tag, collect them
     * and return them as an array.
     */
    public function get_stripped_shortcodes($content, $tag) {
        $pattern = MaterializerShortcodes::single_shortcode_regexp($tag);
        $matches = array();

        if(!has_shortcode($content, $tag)) {
            return false;
        }

        preg_match_all("/$pattern/s", $content, $matches);

        return $matches; 
    }

    /**
     * Parse $content and strip all $tag shortcodes, returning
     * the content with only shortcodes matchin $tag removed.
     */
    public function strip_shortcode($content, $tag) {
        if(false === strpos($content, $tag)) {
            return $content;
        }
        $pattern = MaterializerShortcodes::single_shortcode_regexp($tag);
        return preg_replace_callback("/$pattern/s", 'strip_shortcode_tag', $content);
    }


    /**
     * Given $tag, return a regexp to match shortcodes with name $tag.
     */
    public function single_shortcode_regexp($tag) {
        return
                '\\['
              . '(\\[?)'
              . "($tag)"
              . '(?![\\w-])'
              . '('
              .     '[^\\]\\/]*'
              .     '(?:'
              .         '\\/(?!\\])'
              .         '[^\\]\\/]*'
              .     ')*?'
              . ')'
              . '(?:'
              .     '(\\/)'
              .     '\\]'
              . '|'
              .     '\\]'
              .     '(?:'
              .         '('
              .             '[^\\[]*+'
              .             '(?:'
              .                 '\\[(?!\\/\\2\\])'
              .                 '[^\\[]*+'
              .             ')*+'
              .         ')'
              .         '\\[\\/\\2\\]'
              .     ')?'
              . ')'
              . '(\\]?)';
    }

}
