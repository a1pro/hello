<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: a1_pro
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook.php';

$appapikey = 'ea266bd0d9622ab93ed0f4b1f034e0c7';
$appsecret = '57e1a01c0d09b5efc586e07ee71acbfe';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 25);
foreach ($friends as $friend) {
  echo "<br>$friend";
}
echo "</p>";
?>
<p>
<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkname=index.php&amp;linkurl=http%3A%2F%2Fapps.facebook.com%2Fcoollres%2F"><img src="http://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share/Bookmark"/></a><script type="text/javascript">a2a_linkname="index.php";a2a_linkurl="http://apps.facebook.com/coollres/";</script><script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script></p>
<fb:login-button v="2" size="medium" onlogin="window.location.reload(true);">Connect with Facebook</fb:login-button>
