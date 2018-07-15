<?php
// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true); // Custom scripts
    wp_enqueue_script('html5blankscripts'); // Enqueue it!
}
?>
