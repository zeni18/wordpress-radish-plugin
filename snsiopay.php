<?php
/*
Plugin Name: jian shou
Plugin URI: https://jianshou.online
Description: 简售可以让您在文章中增加付费内容，用户扫码支付后可见，支持支付宝、微信。
Version: 1.0.0
Author: 简售
Author URI: https://blog.zero-note.online
*/

add_action('media_buttons', 'radishpay_button');
add_action('wp_footer', 'radishpay_script');
add_action('admin_footer', 'radishpay_editor_script');


function radishpay_button(){
	echo '<a href="javascript:void(0);" class="button button-primary add_radishpay">添加付费资源</a>';
}

function radishpay_script(){
	echo '<script src="https://jianshou.online/js/embed.js" charset="utf-8" type="text/javascript"></script>';
}

function radishpay_editor_script(){
    echo '<link rel="stylesheet" type="text/css" href="https://jianshou.online/layer/layer.css" />';
	echo '<script src="https://jianshou.online/js/wordpress.js" charset="utf-8" type="text/javascript"></script>';
}


