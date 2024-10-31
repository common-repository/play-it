<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function pip_admin_table_style(){
wp_enqueue_style( 'tableStyle', plugins_url('css/ts.css',__FILE__) ); 
}
add_action( 'admin_enqueue_scripts', 'pip_admin_table_style' );
function pip_menu(){
add_menu_page('Play It','Play It','manage_options','playmenu','pip_settings_page',plugins_url('imgs/playicon.png',__FILE__));
}
function pip_settings_page(){
?>
<h2 style="text-align:center; font-weight:bold;"><img width="5%;" src="<?php echo plugins_url('imgs/playimg.png',__FILE__); ?>"/><br>Play It</h2>
<form method="post" action="options.php">
<?php
wp_nonce_field('update-options');
settings_fields('pip_settings_group');
?>
<div style="width:98.5%;">
<table  class="widefat" style="width:100% !important;">
<thead>
<tr>
<th colspan="5">
<span style=" font-size:16px;">Play It Settings</span>
</th>
</tr>
</thead>
<tbody>
<tr >
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Track
</th>
<td ><input type="radio" name="play_track" value="1" <?php if(get_option('play_track')=='1') echo 'checked';  ?> > Track 1 </td>
<td ><input type="radio" name="play_track" value="2" <?php if(get_option('play_track')=='2') echo 'checked';  ?> > Track 2 </td>
<td ><input type="radio" name="play_track" value="3" <?php if(get_option('play_track')=='3') echo 'checked';  ?> > Track 3 </td>
<td ><input type="radio" name="play_track" value="4" <?php if(get_option('play_track')=='4') echo 'checked';  ?> > Track 4 </td>
</tr>

</tbody>
<tfoot>
<tr>
<th colspan="5" >
<input type="submit" class="button-primary"  value="Save Changes">
</th>
</tr>
</tfoot>
</table>
</div>
<?php
}