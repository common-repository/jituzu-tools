<?php

function jtools_shortcode ($atts=array())
{
  $atts['echo'] = false;
  return jtools_frame($atts);
}
add_shortcode('jituzu', 'jtools_shortcode');
