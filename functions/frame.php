<?php

function jtools_frame ($atts=array())
{
  global $jtools;

  extract(shortcode_atts(array(
    'echo' => true,
    'height' => false,
    'width' => false,
    'practice' => $jtools->practice_slug,
    'provider' => $jtools->provider_slug,
    'highlight_color' => str_replace('#', '%23', $jtools->highlight_color),
    'search_color' => str_replace('#', '%23', $jtools->search_color),
    'date_color' => str_replace('#', '%23', $jtools->date_color),
    'urgent_color' => str_replace('#', '%23', $jtools->urgent_color),
    'transparent_background' => $jtools->transparent_background
  ), $atts));

  
  $fullscreen = !!$jtools->full_screen ? ' fullscreen' : '';
  $transparent = !!$jtools->transparent_background ? ' transparent' : '';
  $class = "{$fullscreen}{$transparent}";
  
  
  if (!!$width || !!$height) {
    $style = ' style="';
    if (!!$width) $style .= 'width:' . (int)$width . 'px;';
    if (!!$height) $style .= 'height:' . (int)$height . 'px;';
    $style .= '"';
  } else {
    $style = '';
  }

  if (!!$practice) {
    $embed_url =
      $jtools->embed_root_url . '/' . $practice .
      (!!$provider ? '/' . $provider : '') .
      '?wordpress=true';
    foreach(array('highlight', 'search', 'date', 'urgent') as $c) {
      $color = ${"{$c}_color"};
      if (!!$color) $embed_url .= "&{$c}_color=$color";
    }
    $html =
      "<div class=\"jtools_frame$class\"$style>\n" .
      "  <iframe src=\"$embed_url\"\n" .
      "  frameborder=\"0\"></iframe>\n" .
      "</div>";

  } else {
    $class .= ' error';
    $html =
      "<div class=\"jtools_frame$class\"$style>\n" .
      "  <strong>Misconfiguration Error</strong><br>\n" .
      "  The <em>\"practice\"</em> option is blank.\n" .
      "</div>";
  }

  if (!!$echo) echo $html;
  else return $html;
}
