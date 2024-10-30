<?php

function jtools_admin_menu()
{
  global $jtools;

  add_menu_page('Jituzu Tools', 'Jituzu Tools', 'administrator', 'jtools',
    'jtools_page_main', "$jtools->web_path/images/icon-jtools@16.png");
  $jtools->admin_menu_pages = array(
    add_submenu_page('jtools', 'Settings', 'Settings',
      'administrator', 'jtools-config', 'jtools_page_config'),
    add_submenu_page('jtools', 'Shortcode', 'Shortcode',
      'administrator', 'jtools-shortcode', 'jtools_page_shortcode'),
    add_submenu_page('jtools', 'Template Tags', 'Template Tags',
      'administrator', 'jtools-templatetags', 'jtools_page_template_tags')
  );
}
