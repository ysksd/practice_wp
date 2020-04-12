<?php
/*
 * Plugin Name: My functions
 * Plugin URI: http://wp/plugin
 * Description: 良く使う関数をまとめたプラグイン
 * Author: Shoda
 * Author URI: http://wp
 * Version: 1.0
 */
class MyFunctions
{

    public function __construct()
    {
        add_shortcode('test', array($this, 'shortcode_test'));
    }

    function shortcode_test()
    {
        return '「ショートコードのテストです。」';
    }

    function display_hello()
    {
        echo 'こんにちは';
    }
}

$my_functions = new MyFunctions();
