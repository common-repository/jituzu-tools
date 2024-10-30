<?php
/*
 Plugin Name: Jituzu Tools
 Description: Embed Jituzu into your WordPress site with template tags and shortcodes.
 Version: 1.3.3
 Author: Jituzu
 Author URI: https://www.jituzu.com/
 
 Copyright 2015 Douglas Waltman II
*/

global $jtools, $wpdb;

foreach(glob(dirname(__FILE__)."/functions/*.php") as $file) require_once $file;

jtools_init();
