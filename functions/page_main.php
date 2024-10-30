<?php

function jtools_page_main()
{
  global $jtools, $wpdb;
  ?>
  <div class="wrap">
    <img src="<?php echo $jtools->web_path; ?>/images/logo-jituzu.png"
      alt="Jituzu"/>

    <p class="jtools_welcome">
      Jituzu Tools helps you integrate Jituzu into your blog and/or website.
      Setup is quick and easy.
    </p>
    
    <h2>Getting Started</h2>
    <p>
      While we offer configuration options, the only thing
      you need to get started is your Jituzu practice name.
    <p>
      The majority of users will find the Shortcode integration to be the
      easiest integration method, and developers can easily add Jituzu template
      tags when creating custom themes and 3rd party plugins.
    </p>
    <p>
      <a href="?page=jtools-config" class="button button-primary">
        Setup</a>
      <a href="?page=jtools-shortcode" class="button">
        Shortcode</a>
      <a href="?page=jtools-templatetags" class="button">
        Template Tags</a>
    </p>
    <hr>

    <h2>Don't know what Jituzu is?</h2>
    <p>
      Jituzu provides technology to help you run an efficient practice through
      scheduling, reminders, portals, credit card processing, web pages and a
      mobile app. Our feature set is customized to your needs, all the way down
      to your terminology. Jituzu Tools brings these features to WordPress.
    </p>
    <p>
      <strong>Want to learn more? Watch this short video:</strong>
    </p>
    <p>
      <iframe src="https://player.vimeo.com/video/92200813"
        webkitallowfullscreen mozallowfullscreen allowfullscreen
        frameborder="0" width="640" height="360"></iframe>
    </p>
    <p>
      <a href="https://www.jituzu.com/account/register/practice/?embedded=False" target="_blank"
        class="button button-primary">
        Signup</a>
      <a href="https://www.jituzu.com/" target="_blank" class="button">
        Jituzu Main Site</a>
      <a href="https://www.jituzu.com/help/embed/?embedded=False" target="_blank" class="button">
        Setting Up Your Jituzu Account Once You Have Signed Up</a>

        
    </p>
  </div>
  <?php
}
