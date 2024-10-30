<?php

function jtools_get_frame ($atts=array())
{
  global $jtools;

  $atts['echo'] = false;
  return jtools_frame($atts);
}
