<?php

function jtools_page_template_tags()
{
  global $jtools, $wpdb;
  ?>
  <div class="wrap">
    <img src="<?php echo $jtools->web_path; ?>/images/logo-jituzu.png"
      alt="Jituzu"/>
    <?php jtools_print_errors(); ?>
    <hr>

    <h2>Template Tags</h2>
    <p>
      <strong>For advanced users and/or theme developers.</strong><br>
      Use the Jituzu template tags within your theme&#39;s page templates:
    </p>

    <div class="jtools_tag">
      <h3>jtools_frame($options)</h3>
      <p>Add the Jituzu &lt;iframe&gt; to your page template.</p>
    </div>

    <div class="jtools_tag">
      <h3>jtools_get_frame($options)</h3>
      <p>
        Get the Jituzu &lt;iframe&gt; code as HTML. This is useful if you need
        to manipulate the HTML output before writing it to the page.
      </p>
    </div>

    <h2>Options Array</h2>
    <table class="jtools_options form-table">
      <tr>
        <th><code>practice</code></th>
        <td>
          Overrides the <em>practice</em> specified on the settings page.
        </td>
      </tr>
      <tr>
        <th><code>width</code></th>
        <td>
          Sets the <em>width</em> of the Jituzu frame in pixels using the
          <em>style</em> attribute.
        </td>
      </tr>
      <tr>
        <th><code>height</code></th>
        <td>
          Sets the <em>height</em> of the Jituzu frame in pixels using the
          <em>style</em> attribute.
        </td>
      </tr>
      <tr>
        <th><code>provider</code></th>
        <td>
          Overrides the <em>provider</em> specified on the settings page.
        </td>
      </tr>
      <tr>
        <th><code>highlight_color</code></th>
        <td>
          Overrides the <em>highlight color</em> specified on the settings page.
          Example: <tt>#FFCC33</tt>
        </td>
      </tr>
      <tr>
        <th><code>search_color</code></th>
        <td>
          Overrides the <em>search color</em> specified on the settings page.
          Example: <tt>#FFCC33</tt>
        </td>
      </tr>
      <tr>
        <th><code>date_color</code></th>
        <td>
          Overrides the <em>date color</em> specified on the settings page.
          Example: <tt>#FFCC33</tt>
        </td>
      </tr>
      <tr>
        <th><code>urgent_color</code></th>
        <td>
          Overrides the <em>urgent color</em> specified on the settings page.
          Example: <tt>#FFCC33</tt>
        </td>
      </tr>
    </table>
    <br>

    <h2>Examples</h2>
    <table class="jtools_examples form-table">
      <tr>
        <th>Print Frame</th>
        <td>
          <textarea readonly="readonly" class="jtools_code large-text" rows="1">
jtools_frame();</textarea>
        </td>
      </tr>
      <tr>
        <th>Frame as a Variable</th>
        <td>
          <textarea readonly="readonly" class="jtools_code large-text" rows="3">
$jtools_custom_frame = jtools_get_frame();
// do something
echo $jtools_custom_frame;</textarea>
        </td>
      </tr>
      <tr>
        <th>Custom Settings</th>
        <td>
          <textarea readonly="readonly" class="jtools_code large-text" rows="5">
jtools_frame(array(
  'practice' => 'hello',
  'provider' => 'world',
  'highlight_color' => '#98C53D'
));</textarea>
        </td>
      </tr>
    </table>
  </div>
  <?php
}
