<?php

function jtools_init_admin()
{
  global $jtools;
  
  // Is there a post request?
  if(array_key_exists('jtools', $_POST)) {
    $jtools->post =& $_POST['jtools'];
    jtools_admin_post();
  }

  // Load JS
  wp_enqueue_script('jtools_admin_js', "$jtools->web_path/js/admin.js",
    array('wp-color-picker'));

  // Load CSS
  wp_enqueue_style('wp-color-picker');
  wp_enqueue_style('jtools_admin_css', "$jtools->web_path/css/admin.css");
}
