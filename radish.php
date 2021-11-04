<?php
/*
Plugin Name: jian shou
Plugin URI: https://jianshou.online
Description: 简售可以让您在文章中增加付费内容，用户扫码支付后可见，支持支付宝、微信。
Version: 1.0.0
Author: 简售
Author URI: https://blog.zero-note.online
*/

add_action('media_buttons', 'radish_button');
add_action('wp_footer', 'radish_script');
add_action('admin_footer', 'radish_editor_script');
add_filter('the_content', 'radish_content');


function radish_content($content)
{
    return preg_replace('/\[radish=(\w+)\](.*?)\[\/radish\]/is', '<div class="radish-content" data-hashid="$1">###简售付费内容，发布后可见效果###</div>', $content);
}


function radish_button()
{
    echo '<a href="javascript:void(0);" class="button button-primary add_radishpay">添加付费资源</a>';
}

function radish_script()
{
    echo '<script src="https://jianshou.online/js/embed.js" charset="utf-8" type="text/javascript"></script>';
}

function radish_editor_script()
{
    echo '<link rel="stylesheet" type="text/css" href="https://jianshou.online/layer/layer.css" />';
    echo '<script src="https://jianshou.online/js/wordpress.js" charset="utf-8" type="text/javascript"></script>';
}


