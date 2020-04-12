<?php
/*
 * Plugin Name: Search Word Highlight
 * Plugin URI: http://wp/plugin
 * Description: 検索したワードをハイライトにするプラグイン
 * Author: Shoda
 * Author URI: http://wp
 * Version: 1.0
 */
class Search_Word_Highlight
{
    function __construct()
    {
        add_filter('the_title', array($this, 'highlight_text'));
        add_filter('the_content', array($this, 'highlight_text'));
        add_filter('the_excerpt', array($this, 'highlight_text'));
    }

    function highlight_text($text)
    {
        if (is_search()) {
            $string = get_query_var('s');
            $text = preg_replace('/' . $string . '/', '<span class="highlight">' . $string . '</span>', $text);
        }
        return $text;
    }
}
$search_word_highlight = new Search_Word_Highlight();
