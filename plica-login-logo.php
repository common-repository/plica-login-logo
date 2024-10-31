<?php
/*
Plugin Name: Plica Login Logo
Plugin URI: http://plicazaragozame.es/
Description: Plica Login Logo
Author: Plica Zaragozame S.L.
Version: 1.0.2
Author URI: http://plicazaragozame.es
*/

define('PLICA_LOGIN_LOGO_VERSION', '1.0.2');

function plica_login_logo_head() {
	$wud = wp_upload_dir();
	$url_logo = $wud['baseurl'] . '/plica-login-logo.png';
?>
<style type="text/css">
div#login > h1 > a {
	background: transparent url(<?php echo $url_logo; ?>) center center no-repeat;
	margin: 0 auto;
	height: 70px;
}
</style>
<?php
}
function plica_login_logo_headerurl() {
	return bloginfo('url');
}
function plica_login_logo_headertitle() {
	return bloginfo('title');
}
add_action('login_head', 'plica_login_logo_head');
add_filter('login_headertitle', 'plica_login_logo_headertitle');
add_filter('login_headerurl', 'plica_login_logo_headerurl');

?>