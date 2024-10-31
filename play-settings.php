<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function pip_settings(){
register_setting('pip_settings_group','play_track');

}

function pip_register_settings(){
register_setting('pip_settings_group','play_track');
}

register_activation_hook(__FILE__,'pip_install');
register_deactivation_hook(__FILE__,'pip_deactivate');
add_action('wp_footer','pip_footer');
add_action('admin_menu','pip_menu');
add_action('admin_init','pip_settings');