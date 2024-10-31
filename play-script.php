<?php if ( ! defined( 'ABSPATH' ) ) exit; 

function pip_footer(){
wp_enqueue_script( 'playScript', plugins_url('js/play.js',__FILE__) ); 
$track = plugins_url('js/'.get_option('play_track').'.mp3',__FILE__);
$trackData = array(
	'track' => $track,
);
wp_localize_script( 'playScript', 'track_val', $trackData );
}
