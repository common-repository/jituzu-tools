<?php

function jtools_init_public()
{
  global $jtools, $wpdb;

  // Load CSS
  if ($jtools->use_css)
    wp_enqueue_style('jtools_public_css', "$jtools->web_path/css/public.css");
}
