<?php



/*   

 *   FACEBOOK CONNECT LIBRARY FUNCTIONS/CLASSES

 */



/*   

 *   FILE INCLUDE PATHS

 *   MAKE SURE THESE PATHS ALL END WITH A FORWARD SLASH

 */



define(CONNECT_APPLICATION_PATH, "/home/a1pro/public_html/cake/");

define(CONNECT_JAVASCRIPT_PATH, "http://174.122.72.130/~a1pro/cake/javascript/");

define(CONNECT_CSS_PATH, "http://174.122.72.130/~a1pro/cake//css/");

define(CONNECT_IMG_PATH, "/home/a1pro/public_html/cake//");







include_once CONNECT_APPLICATION_PATH . 'facebook-client/facebook.php';

include_once CONNECT_APPLICATION_PATH . 'lib/fbconnect.php';

include_once CONNECT_APPLICATION_PATH . 'lib/core.php';

include_once CONNECT_APPLICATION_PATH . 'lib/user.php';

include_once CONNECT_APPLICATION_PATH . 'lib/display.php';





/*   

 *   FB CONNECT APPLICATION DATA

 */



$callback_url    = 'http://174.122.72.130/~a1pro/cake/';

$api_key         = '86ec87d069628b21d25d332a1cac88ee';

$api_secret      = '37c94a4273d2c5911ba8806cbcfc6f92';

$base_fb_url     = 'connect.facebook.com';

$feed_bundle_id  = 'your template bundle id';



/*   /public_html/coolres/jsonwrapper/JSON/

 *   SAMPLE BUNDLE DATA

 */



$sample_post_title = "FB Connect Demo";

$sample_post_url = "http://174.122.72.130/~a1pro/cake/";

$sample_one_line_story = '{*actor*} posted a comment on <a href="{*post-url*}">{*post-title*}</a> and said {*post*}.';

$sample_template_data = '{"post-url":"http://174.122.72.130/~a1pro/cake/", "post-title":"FB Connect Demo", "post":"This is so easy to use!"}';



?>