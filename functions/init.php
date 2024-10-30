<?php

function jtools_init()
{
  global $jtools, $plugin;

  // Settings
  $jtools = array(
    'db_prefix' => 'wp_',
    'web_path' => WP_PLUGIN_URL . '/' . basename($plugin, ".php"),
    'file_path' => preg_replace('/\/functions/i', '', dirname(__FILE__)),
    'errors' => array(),
    'embed_root_url' => 'https://www.jituzu.com/site'
  );
  $defaults = array(
    'practice_slug' => '',
    'provider_slug' => '',
    'use_css' => true,
    'full_screen' => false,
    'transparent_background' => false,
    'highlight_color' => '',
    'search_color' => '',
    'date_color' => '',
    'urgent_color' => '',
    'herp' => 'derp'
  );
  $serialized_settings = get_option('jtools_settings');
  if(!!$serialized_settings) {
    $settings = array_merge($defaults, unserialize($serialized_settings));
    if (count(array_diff_key($settings, $defaults)) > 0)
      update_option('jtools_settings', serialize($settings));
  } else {
    $settings = $defaults;
    update_option('jtools_settings', serialize($settings));
  }
  foreach($settings as $key => $value) $jtools[$key] = $value;
  $jtools = (object)$jtools;

  # Init
  add_action('admin_menu', 'jtools_admin_menu');
  add_action('admin_init', 'jtools_init_admin');
  if (!is_admin()) add_action('init', 'jtools_init_public');
}
