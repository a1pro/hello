<?php
include_once 'lib/config.php';
$user = User::fbc_getLoggedIn();
($user) ? $fb_active_session = $user->fbc_is_session_active() : $fb_active_session = FALSE;
if (!$user) {
echo render_header($user);
}
elseif ($user->fbc_is_facebook_user()) {
echo render_header($user);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="KEYWORDS" content="thedailyfrost"/>
			<meta name="description" content="thedailyfrost"/>
			<title>thedailyfrost</title>
			<style type="text/css">
body{ background:url(media/bg.jpg) no-repeat; margin:0px; width:999px; height:765px}
.rep{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; padding-left:2px; color:#302f30}
.rep2{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;  color:#302f30; padding-left:2px; line-height:24px }
.rep4 { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px;  color:#302f30; font-style:normal; text-decoration:none }
.rep4:hover{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px;  color:#5d76aa; font-style:normal; text-decoration:underline }

.black{ background:url(media/black.gif) no-repeat; width:666px; height:339px}
#da { font-family:Verdana, Arial, Helvetica, sans-serif; color:#302f30; font-size:14px}
#re{ padding-left:20px}

</style>
		</head>
</head>

<body>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding:20px 20px 20px 20px">
			<tr>
				<td width="20%"><img src="media/daily.gif" /></td>
				<td width="80%" class="rep"><i>snow reports, events and happenings for the entire tahoe region,<br /> 
brought to your inbox every morning.</i></td>
			</tr>
			<tr>
				<td  colspan="2">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td class="black" width="67%">
								<div align="center" style=" color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold"><i>image</i></div>
							</td>
							<td valign="top" width="33%">
								
								<div id="re">
								    <div class="rep"> the daily frost is your one stop source for:</div>
									<div> daily snow reports</div>
									<div> daily on snow events</div>
									<div> daily off snow events</div>
									<div> daily articles  </div>
									<div> daily photos</div>
																</div>
									<div id="re" style="padding-top:10px">
								    <div class="rep"> covering the entire lake tahoe region:</div>
									<div> squaw valley</div>
									<div>northstar</div>
									<div> alpine meadows</div>
									<div> sugar bowl </div>
									<div> heavenly</div>
									<div> mt. rose</div>
									
									
								</div>
							</td>
						</tr>
						<tr>
						<td>&nbsp;</td><td>&nbsp;</td>
						</tr>
						<tr>
							<td>
								<table>
									<tr>
										<td class="rep2">Sign up for the daily frost through Facebook (recommended):</td>
										<td>
										<?php



if (!$user) {
	// DISPLAY PAGE WHEN USER IS NOT LOGGED IN TO FB CONNECT
	echo render_logged_out_index();  
	
	
	?>
<? }
elseif ($user->fbc_is_facebook_user()) {
$_SERVER['REQUEST_URI']  = 'http://174.122.72.130/~a1pro/cake/';
$html = sprintf('<a href="#" onClick="FB.Connect.logout(function() { refresh_page(); })">'
											 .'Logout of Facebook'
											 //.'<img src="images/fbconnect_logout.png">'
											 .'</a>',
											 $_SERVER['REQUEST_URI']);
print  $html;											 

}
?>
   </td>
									</tr>
								</table>	
							</td>
							<td>&nbsp;</td>
						
						</tr>
						<tr>
							<td>
								<div class="rep2">Sign up for the daily frost without Facebook:</div>
								
							</td>
						</tr>
						<tr>
							<td>
								
									<table cellpadding="0" cellspacing="0" border="0" width="100%">
									<tr>
											<td style="color:#484848; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px">*Required</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
									</tr>
										<tr>
											<td width="40%"><input type="text" name="username" size="36" value="<?php if (!$user) {
											print 'your name'; 
											}elseif ($user->fbc_is_facebook_user()) {
											print $user->fbc_getName();
											} ?>" /></td>
											<td width="40%"><input type="text" name="email" size="36" value="email
											
 " /></td>
 <td width="40%"><input type="text" name="zip" size="36" value="zip
											
 " /></td>

											<td width="20%"><input type="button" name="submit" onclick="streamIt()" value="Publish" /></td>
										</tr>
									</table>
								
							</td>
						</tr>
					</table>
				
				</td>
				
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td align="center" colspan="2"><b>the daily frost</b>&nbsp; <i>contact    advertise    &copy; david bronkie 2009</i></td>
			</tr>
		
		</table>
 

 <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US" type="text/javascript"></script><script type="text/javascript">FB.init("485a6d65e6bc1580844b217665104bd1");</script><fb:fan profile_id="209956411005" stream="0" connections="10" width="300"></fb:fan><div style="font-size:8px; padding-left:10px"><a href="http://www.thedailyfrost.com/">thedailyfrost</a> on Facebook</div>

	

	 <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US" type="text/javascript"></script><script type="text/javascript">FB.init("d990c996a9d80fd8cf3da8576ecb2078");</script><fb:comments> </fb:comments>
	
	
</body>
</html>

<? if (!$user) {
	echo render_footer();
}
elseif ($user->fbc_is_facebook_user()) {
echo render_footer();
}
?>	



<a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>



  <script type="text/javascript" src="http://b.static.ak.fbcdn.net/rsrc.php/z37N4/hash/3yfoo63v.js"></script>
<a href="http://www.facebook.com/apps/application.php?id=209956411005" title="fan pages" target="_TOP" style="border: 0px;color: #3B5998;font-family: verdana;font-size: 12px;font-weight: bold;margin: 0px;padding: 0px;text-decoration: none;">fan pages</a></td></tr></table></div></div><div style="display: block;float: right;margin: 0px;padding: 4px 0px 0px 0px;"></div>
                                           