<?php
/**
 * @package Wordpress AJAX button plugin
 * @version 1.0.0
 */
/*
Plugin Name: Wordpress AJAX button plugin
Description: Simple ajax request plugin. Once click "AJAX Request" button, the JS changes text.
Author: iigmir
Version: 1.0.0
*/

function css_text()
{
    return "<style>" . file_get_contents( "plugin.css", true ) . "</style>";
}

function js_text()
{
    return "<script>" . file_get_contents( "plugin.js", true ) . "</script>";
}

function form_tos()
{
    $tos_btn = "<button id='iSecondlyAJAX' class='iSecondlyAJAX' type='button' onclick='request_iSecondlyAJAX_api()'>AJAX Request</button>";
    $css_text = css_text();
    $js_text = js_text();
    $tos = $tos_btn . $css_text . $js_text;
    echo( $tos );
}

add_action( "comment_form", "form_tos" , 1 );