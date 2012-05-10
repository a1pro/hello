<html xmlns="http://www.w3.org/1999/xhtml"
	xmlns:fb="http://www.facebook.com/2008/fbml" 
	xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
		<title>Facebook New JavaScript SDK - Example</title>
		<meta property="fb:app_id" content="148074288548415" />
		<meta property="og:title" content="Facebook New JavaScript SDK - Example" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://facebook.coolres.com/coollres/" />
		<meta property="og:site_name" content="Coolres" />
		<style type="text/css">
			.right{
				border: 1px solid #ffffff;
				float:right;
				height:100%;
				overflow:scroll;
				width:258px
			}
		</style>
	</head>
 

		<div id="content" style="float:none; margin:0 auto; width:960px">
			<h1 style="text-align:center;">Facebook New JavaScript SDK - Example</h1>
 
			<div id="left" style="float:left; width:700px">
				<div id="like-button">
					<p>Facebook Like Button - Graph API</p>
					<fb :like></fb>
				</div>
			
			</div>
 
			<div id="right" class="right">
				<p><strong>Console</strong></p>
				<ol>
					<div id="console"></div>
				</ol>
			</div>
		</div>
		<div id="fb-root"></div>
	</body>
 
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js" type="text/javascript"></script>
 
	<script type="text/javascript">
		google.load("prototype", "1.6.1.0");
		google.load("scriptaculous", "1.8.3");
		google.setOnLoadCallback(OnLoad);
 
		function consolelog(message){
			var li = new Element('li').update(message);
			$('console').insert(li);
		}
 
		function OnLoad(){
			consolelog('Google JavaScript API are loaded.');
 
			window.fbAsyncInit = function() {
				FB.init({appId: '210189452626', cookie: true, logging: true, status: true, xfbml: true});
 
				FB.Event.subscribe('auth.login', function(response) {
					consolelog('User is Logged In');
				});
 
				FB.Event.subscribe('auth.logout', function(response) {
					consolelog('Session was terminated!');
				});
 
				FB.Event.subscribe('edge.create', function(response) {
					consolelog("User liked <a target='_blank' href='" + response + "'>this page.</a>");
				});
			};
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
		}
 
		function fbLogout(){
			FB.logout(function(response) {
				$('fbLogin').show();
				$('fbLogout').hide();
			});
		}
 
		function fbLogin(){
			FB.login(function(response) {
				if (response.session) {
					$('fbLogin').hide();
					$('fbLogout').show();
 
					if (response.perms) {
						//To get all permissions granted by user.
						consolelog("<strong>Granted permissions:</strong> " + response.perms);
					} else {
						consolelog('User did not grant any permission');
					}
 
					//To get current user's profile picture
					var userImage = new Element("img", {"src":"https://graph.facebook.com/" + response.session.uid + "/picture"});
					$('console').insert(userImage);
 
					//To get user details
					FB.api('/me', function(response) {
						consolelog('Welcome <strong>' + response.first_name + ' ' + response.last_name + '</strong>!');
					});
 
				} else {
					consolelog('FB login was not successful.');
				}
			}, {perms:'publish_stream'});
		}
	</script>
