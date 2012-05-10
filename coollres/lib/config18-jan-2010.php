<?php

/*   
 *   FACEBOOK CONNECT LIBRARY FUNCTIONS/CLASSES
 */

/*   
 *   FILE INCLUDE PATHS
 *   MAKE SURE THESE PATHS ALL END WITH A FORWARD SLASH
 */

define(CONNECT_APPLICATION_PATH, "/home/a1pro/public_html/aprofessional/");
define(CONNECT_JAVASCRIPT_PATH, "http://64.246.2.2/~a1pro/aprofessional/javascript/");
define(CONNECT_CSS_PATH, "http://64.246.2.2/~a1pro/aprofessional/css/");
define(CONNECT_IMG_PATH, "/home/a1pro/public_html/aprofessional/");



include_once CONNECT_APPLICATION_PATH . 'facebook-client/facebook.php';
include_once CONNECT_APPLICATION_PATH . 'lib/fbconnect.php';
include_once CONNECT_APPLICATION_PATH . 'lib/core.php';
include_once CONNECT_APPLICATION_PATH . 'lib/user.php';
include_once CONNECT_APPLICATION_PATH . 'lib/display.php';


/*   
 *   FB CONNECT APPLICATION DATA
 */

$callback_url    = 'http://64.246.2.2/~a1pro/aprofessional/';
$api_key         = 'ea266bd0d9622ab93ed0f4b1f034e0c7';
$api_secret      = '57e1a01c0d09b5efc586e07ee71acbfe';
$base_fb_url     = 'connect.facebook.com';
$feed_bundle_id  = 'your template bundle id';

/*   /public_html/aprofessional/jsonwrapper/JSON/
 *   SAMPLE BUNDLE DATA
 */

$sample_post_title = "FB Connect Demo";
$sample_post_url = "http://64.246.2.2/~a1pro/aprofessional/";
$sample_one_line_story = '{*actor*} posted a comment on <a href="{*post-url*}">{*post-title*}</a> and said {*post*}.';
$sample_template_data = '{"post-url":"http://64.246.2.2/~a1pro/aprofessional/", "post-title":"FB Connect Demo", "post":"This is so easy to use!"}';

?>