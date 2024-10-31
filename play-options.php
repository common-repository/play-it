<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function pip_install(){
add_option('play_track','1');
}

function pip_deactivate(){
delete_option('play_track');
}