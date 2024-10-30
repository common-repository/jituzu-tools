<?php

function jtools_page_shortcode()
{
  global $jtools, $wpdb;
  ?>
  <div class="wrap">
    <img src="<?php echo $jtools->web_path; ?>/images/logo-jituzu.png"
      alt="Jituzu"/>
    <?php jtools_print_errors(); ?>
    <hr>

    <h2>Shortcode</h2>
    <p>Use the Jituzu shortcode to add the Jituzu portal to your pages.  For most people, this is all you will need to do:</p>
    <p class="jtools_shortcode">[jituzu]</p>

    <p>Resulting HTML:</p>
    <textarea readonly="readonly" class="jtools_code large-text" rows="5"
      ><?php echo trim(apply_filters('the_content', '[jituzu]')); ?></textarea>
    <hr>

    <h2>Shortcode with Dimensions</h2>
    <p>Optionally specify width and/or height of the Jituzu page in pixels. This will constrain the height/width to only what you specify.</p>
    <p class="jtools_shortcode">[jituzu width="400" height="200"]</p>

    <p>Resulting HTML:</p>
    <textarea readonly="readonly" class="jtools_code large-text" rows="5"
      ><?php echo trim(apply_filters('the_content',
      '[jituzu width="400" height="200"]')); ?></textarea>
  </div>
  <?php
}
