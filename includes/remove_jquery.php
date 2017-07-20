<?php
// Remove jQuery Migrate Script from header and Load jQuery from Google API
function crunchify_stop_loading_wp_embed_and_jquery() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
		wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
	}
}
add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');
?>
