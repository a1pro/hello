<?php

/*
 *   SAMPLE PRESENTATION LAYER FUNCTIONS TO WORK WITH FB CONNECT
 */

/*   FUNCTION OVERVIEW
 *   prevent_cache_headers()						PREVENTS BROWSER FROM CACHING
 *   render_header()								RENDERS HEADER AND BODY TAGS
 *   onloadRegister($js)							JAVASCRIPT TO INCLUDE WHEN PAGE HAS LOADED
 *   render_footer()								RENDERS FOOTER INCLUDING FB CONNECT JS INCLUDE
 *   render_logged_out_index()						RENDERS PAGE WHEN USER HAS LOGGED OUT
 *	 render_status($user, $status_result)			RENDERS USERS PROFILE STATUS
 *   render_feed_form($user, $publish_result='')	RENDERS FORM FOR SUBMITTING FEED STORIES
 *   showing_results($row_start, $num_rows, $max_rows, $label)
 *   render_friends_table_html($friend, $row_start, $num_rows, $class_namespace='', $title='')		RENDERS TABLE OF FRIENDS USING HTML APPROACH
 *   render_friends_table_xfbml($friend, $row_start, $num_rows, $class_namespace='', $title='')		RENDERS TABLE OF FRIENDS USING XFBML
 *   render_connect_invite_link($has_existing_friends = false)	RENDERS CONNECT INVITE LINK FOR FRIENDS
 *   render_error($msg)								RENDERS ERROR MESSAGE
 */

/*
 * Prevent caching of pages. When the Javascript needs to refresh a page,
 * it wants to actually refresh it, so we want to prevent the browser from
 * caching them.
 */

function prevent_cache_headers() {
	header('Cache-Control: private, no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	header('Pragma: no-cache');
}

/*
 * Show the header that goes at the top of each page.
 */

function render_header($user=null) {
	// Might want to serve this out of a canvas sometimes to test
	// out fbml, so if so then don't serve the JS stuff
	if (isset($_POST['fb_sig_in_canvas'])) {
		return;
	}

	prevent_cache_headers();

	$html = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="KEYWORDS" content="thedailyfrost"/>
			<meta name="description" content="thedailyfrost"/>
			<title>thedailyfrost</title>
			<link type="text/css" rel="stylesheet" href="' . CONNECT_CSS_PATH . 'style.css" />
		</head>
		<body>
	';

	if (is_fbconnect_enabled()) {
		ensure_loaded_on_correct_url();
	}

	$html .='<div class="header">';

	if ($user) {
		// USER LOGGED IN
		
		
		
		
		
		$html .= '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding:20px 20px 20px 20px">
			<tr>
				<td width="20%"><img src="media/daily.gif" /></td>
				<td width="80%" class="rep"><i>snow reports, events and happenings for the entire tahoe region,<br /> 
brought to your inbox every morning.</i></td>
			</tr></table> ';
		
	} else {
		// NOT LOGGED IN
		
		$html .= '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding:20px 20px 20px 20px">
			<tr>
				<td width="20%"><img src="media/daily.gif" /></td>
				<td width="80%" class="rep"><i>snow reports, events and happenings for the entire tahoe region,<br /> 
brought to your inbox every morning.</i></td>
			</tr></table> ';
		
	}

	$html .= '</div>'; // header & header_content
	$html .= '<div class="content">';
	$html .= "<div class='fbconnect_welcome'>";
	$html .= "<img src='" . CONNECT_IMG_PATH . "connect_logo.jpg' class='logo' />";
	
	$html .= "</div>";
	
	// Catch misconfiguration errors.
	if (!is_config_setup()) {
		$html .= render_error('Your FB Connect configuration is not complete.');
		$html .= '</body>';
		echo $html;
		exit;
	}

	return $html;
}

/*
 * Register a bit of javascript to be executed on page load.
 *
 * This is printed in render_footer(), so make sure to include that on all pages.
 */

function onloadRegister($js) {
	global $onload_js;
	$onload_js .= $js;
}

/*
 * Print the unified footer for all pages. Includes all onloadRegister'ed Javascript for the page.
 *
 */

function render_footer() {
	global $onload_js;
	
	$html .= "</div>";
	// the init js needs to be at the bottom of the document, within the </body> tag
	// this is so that any xfbml elements are already rendered by the time the xfbml
	// rendering takes over. otherwise, it might miss some elements in the doc.

	if (is_fbconnect_enabled()) {
		$html .= render_fbconnect_init_js();
	}

	// Print out all onload function calls
	if ($onload_js) {
		$html .= '<script type="text/javascript">'
			.'window.onload = function() { ' . $onload_js . ' };'
			.'</script>';
	}

	$html .= '</body></html>';

	return $html;
}

/*
 * Default index for logged out or new users.
 *
 */

function render_logged_out_index() {

	
	
	if (is_fbconnect_enabled()) {
	     $html .= '<table><tr><td class="rep2">Sign up for the daily frost through Facebook (recommended):</td><td>';
		
		$html .= render_fbconnect_button('medium');
		$html .= '</td></tr></table>';
	}

	return $html;
}

function render_status($user, $status_result) {
      
    
		
		
		
	$html = "<div class='fbconnect_title_wrapper'>";
	$html .= '<table cellpadding="0" cellspacing="0" border="0" width="800px" style="padding:20px 20px 20px 20px">
			<tr><td width="200px">';
			$html .= $user->fbc_getProfilePic_xfbml(true);
				$html .= '</td><td width="250px">';
				$html .= '<b>Welcome, '.$user->fbc_getName().'</b>';
				$html .= '</td><td width="350px">';
		$html .= '<div class="account_links">';
		if ($user->fbc_is_facebook_user()) {
			$html .= sprintf('<a href="#" onClick="FB.Connect.logout(function() { refresh_page(); })">'
											 .'Logout of Facebook'
											 //.'<img src="images/fbconnect_logout.png">'
											 .'</a>',
											 $_SERVER['REQUEST_URI']);
		} else {
			// PUT YOUR SITES LOGOUT URL HERE
		}
		
		
		$html .= '</td></tr></table>';
	$html .= "<h2>My Status</h2>";
	$html .= '<div class="fbconnect_status"><b>' . $user->fbc_first_name . '</b> ' . $user->fbc_getStatus() . '</div>';
	$html .= "<div class='fbconnect_text'>In order to update a status directly from PHP, you must have the user authorize status_update extended permissions to your application.";
	if ($user->fbc_getExtendedPermission('status_update') < 1) {
		$html .= '  Click the button below to authorize status updating.<br/><br/>';
		$html .= "<input type='button' name='fbconnect_spd_submit' class='fbconnect_button' onclick='fbc_show_status_update_permission_dialog();' value='Authorize the publishing action'>";
		$html .= "</div>";
	} else {
		$html .= '<br/><br/>Status Updating Permissions have been granted.<br/><br/>';
		$html .= "<form name='status_form' method='POST'>";
		$html .= "<div id='fbconnect_status_result'>" . $status_result . "</div>";
		$html .= $user->fbc_first_name . " just <textarea id='fbconnect_input' name='status'>
		signed up for the www.thedailyfrost.com
</textarea>";
		$html .= "<input type='submit' name='fbconnect_php_status_submit' class='fbconnect_button' value='publish this to your Facebook account.'>";
		$html .= "</form>";
		$html .= "</div>";
	}
	$html .= "</div>";
	return $html;
}



function render_error($msg) {
	return '<div class="error">'.$msg.'</div>';
}

?>