<?php

function jtools_print_errors()
{
  global $jtools;

  # Check settings
  if (!$jtools->practice_slug) array_push($jtools->errors,
    'Error: Practice is missing.' . ($_GET['page'] == 'jtools-config' ? '' :
    " <a href='?page=jtools-config'>Update Jituzu settings</a>."));

  # Print errors
  if($jtools->errors) {
    echo '<div id="message" class="error below-h2"><ul>';
    foreach($jtools->errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul></div>';
  }
}
