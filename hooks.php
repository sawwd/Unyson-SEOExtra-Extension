<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/** @internal */
function _action_hide_seo_extensions_from_the_list() {
    //global $current_screen; fw_print($current_screen); // debug

    if (fw_current_screen_match(array('only' => array('id' => 'toplevel_page_fw-extensions')))) {
        echo '<style type="text/css"> #fw-ext-seo { display: none !important; } </style>';
    }
}

add_action( 'admin_print_scripts', '_action_hide_seo_extensions_from_the_list' );
