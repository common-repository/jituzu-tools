<?php

function jtools_page_config()
{
  global $jtools, $wpdb;

  if (array_key_exists('settings', $_POST)) {
    $settings = unserialize(get_option('jtools_settings'));
    foreach ($_POST['settings'] as $key => $value) {
      if (property_exists($jtools, $key)) {
        $jtools->{$key} = $value;
        $settings[$key] = $value;
      }
    }
    update_option('jtools_settings', serialize($settings));
  }
  ?>
  <div class="wrap">
    <img src="<?php echo $jtools->web_path; ?>/images/logo-jituzu.png"
      alt="Jituzu"/>
    <?php jtools_print_errors(); ?>
    <hr>

    <h2>Configuration</h2>
    <form method="post" action="">
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Starting Page</th>
          <td>
            <?php echo $jtools->embed_root_url; ?>
            <span id="jtools_practice_slug">
              /
              <input type="text" value="<?php echo $jtools->practice_slug; ?>"
                placeholder="practice"
                name="settings[practice_slug]" class="short-text"/>
            </span>
            <span id="jtools_provider_slug">
              /
              <input type="text" value="<?php echo $jtools->provider_slug; ?>"
                placeholder="provider"
                name="settings[provider_slug]" class="short-text"/>
            </span>
            <p class="description">
              Practice is required. Provider is optional, and should be used by
              customers who only service a single provider.
            </p>
          </td>
        </tr>
      </table>
      <hr>

      <h2>Custom Colors</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Highlight Color</th>
          <td>
            <input type="text" value="<?php echo $jtools->highlight_color; ?>"
              placeholder="#49A3B7"  class="short-text jtools_color"
              name="settings[highlight_color]"/>
            <p class="description">
              Selected day/time blocks, navigation counters,
              scheduled appointments, appointments, etc.
            </p>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Search Color</th>
          <td>
            <input type="text" value="<?php echo $jtools->search_color; ?>"
              placeholder="#FF8A00" class="short-text jtools_color"
              name="settings[search_color]"/>
            <p class="description">
              Search and schedule buttons, soonest appointment row/label, etc.
            </p>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Date Color</th>
          <td>
            <input type="text" value="<?php echo $jtools->date_color; ?>"
              placeholder="#E84C4C" class="short-text jtools_color"
              name="settings[date_color]"/>
            <p class="description">
               The month&#39;s box color when searching for appointments.
            </p>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Transparent Background</th>
          <td>
            <label>
                <input type="hidden" name="settings[transparent_background]" value="0"/>
                <input type="checkbox" name="settings[transparent_background]" value="1"
                  <?php if (!!$jtools->transparent_background) echo 'checked="checked"' ?>/>
                Turn off the default Jituzu background color and use the background color
                of the WordPress site.
            </label>
           </td>
        </tr>
      </table>
      <hr>
      
      <h2>Advanced Settings</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Jituzu CSS</th>
          <td>
            <label>
              <input type="hidden" name="settings[use_css]" value="0"/>
              <input type="checkbox" name="settings[use_css]" value="1"
                <?php if (!!$jtools->use_css) echo 'checked="checked"' ?>/>
              Use Jituzu&#39;s built-in CSS to control the appearance
              of the &lt;iframe&gt;.
            </label>
            <p class="description">
              Uncheck if you prefer to have your theme handle this.
            </p>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Full Screen</th>
          <td>
            <label>
              <input type="hidden" name="settings[full_screen]" value="0"/>
              <input type="checkbox" name="settings[full_screen]" value="1"
                <?php if (!!$jtools->full_screen) echo 'checked="checked"' ?>/>
              Attempt to make the frame fill the browser window.
            </label>
            <p class="description">
              This option is only valid if you enable the Jituzu CSS option.
            </p>
          </td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}
