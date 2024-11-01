<?php
/*
Plugin Name: Virtual Bangla Keyboard
Version: 0.5
Plugin URI: http://www.wpart.tk/
Description: This plugin will add a Virtual Bangla Keyboard in your post's comment form. It will help comment writers to write comments in bangla. The Virtual Keyboard layout is developed by Sabuj Kundu of Amader Projukti. Some java script code is used from Hasin Hayder's phonetic parser script to insert character at the cursor's current position. And finally customized and gets WP plugin shape by Arif Nezami.
Author: Arif Nezami.
Author URI: http://www.wpart.tk/
*/

function virtual_bn_kb() {
				    $url = get_option('siteurl');
			echo '<script language="JavaScript" type="text/javascript" src="' . $url . '/wp-content/plugins/virtual-bangla-keyboard/bn.js"></script>';
}

add_action ( 'comment_form', 'virtual_bn_kb');

 
?>