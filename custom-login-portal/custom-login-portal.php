<?php
/**
 * Plugin Name: Custom Login Portal
 * Plugin URI: http://redeemer.ca
 * Description: This plugin adds some alternate login features for the job board. Employers can now login.
 * Version: 1.0.0
 * Author: Cam Farquharson
 * Author URI: www.cameronfarquharson.ca
 * License: GPL2
 */

add_filter( 'the_password_form', 'my_password_form' );
// This is a function that adds the employer login/job submission form to the  
function my_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '
	<div class="row">
	<div class="col-50">
	<h2>Job Board Login</h2>
	<br>
	<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
	' . __( "To view the job board, enter the password below:<br>" ) . '
	<label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
	</form>
	</div>
	<div class="col-50">
	<h2>Employer Login</h2>';
	echo $o;
	wp_login_form();

	echo "<h2>Register Employer Account</h2>
	<p>To register a new employer account and submit your first job <a href='/post-a-job/'>click here</a>.</p>
	</div>
	</div>";
}

function jobboard_default_page() {
	$url = home_url( '/' );
	$redirect = esc_url( $url ).'/job-dashboard';
  return $redirect;
}
add_filter('login_redirect', 'jobboard_default_page');
?>