<?php session_start(); ob_start();
?>
<div id="fb-root"><fb:like href="http://developers.facebook.com/" width="450" height="80"/>
</div>




<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '148074288548415', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

<?php
include_once 'lib/config.php';

// Include the facebook library config files.



// Set the API key and Secret.

$appapikey = 'af039b7afa18d3d3608a29aa25dbf9d0';

$appsecret = 'dba41e245cbd23004bf2a93076db8c7a';



$facebook = new Facebook($appapikey, $appsecret);


// force a login page

    $appid= $_REQUEST['fb_sig_page_id'] ;





// Echo the "infinite session key" that everyone keeps talking about.

$user5=$facebook->api_client->session_key;



 $pieces = explode("-", $user5);

$pieces2=$pieces[1];




?>
<style type="text/css">
#value_submit{
height:24px;
padding:1px 4px 4px;
}

.FB_button_ok{
float:left !important;
background-color:#5B74A8 !important;
background-position:0 -48px !important;
border-color:#29447E #29447E #1A356E !important;
color:#FFFFFF !important;
border-width:1px;
border-style:solid;
cursor:pointer;
font-family:'Lucida Grande',Tahoma,Verdana,Arial,sans-serif;
font-size:11px;
font-weight:bold;
}	

.key_search{
height:24px;
border:1px solid;
color:#777777;
float:left !important;
border-color:#94A4C6 #FFFFFF #94A4C6 #94A4C6;
border-style:solid none solid solid;
border-width:1px 0 1px 1px;
display:block;
font-size:11px;
height:16px;
margin:0;
padding:3px;
width:102px;
}

.flefts_text{
margin-bottom:10px;
float:left;
width:500px;
}

.border_all{
border-color:#94A3C4 #CCCCCC #FFFFFF #CCCCCC;
border-style:solid solid none solid;
border-width:2px 1px 0 1px;
float:left;
width:518px;
margin-bottom:10px;
}
.list_all{
border-bottom:1px solid #CCCCCC;
float:left;
position:relative;
text-align:left;
width:100%;
}
.list_all_1{

border-bottom:1px solid #CCCCCC;
float:left;
position:relative;
text-align:left;
width:100%;
background-color:#EFEFEF;
}

.pa_all{
padding:1.2em;}

.bigLink_all a {
font-size:15px;
font-weight:bold;
padding-bottom:4px;
text-decoration:none;
color:#3B5998 !important;
cursor:pointer;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}

.bigLink_all a:hover{ text-decoration:underline;
}

.littleGrey_all{
float:right !important;
color:#666666;
font-size:11px;
line-height:15px;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}
.littleGrey_all{
color:#666666;
font-size:11px;
line-height:15px;
text-align:left;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}

button_desc_all{
bottom:11px;
font-size:9px;
left:9px;
position:absolute;
text-align:left;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}

.preview_all{
padding:4px;
color:#3B5998;
cursor:pointer;
text-decoration:none;
font-size:9px;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}
a{
text-decoration:underline;}

.share_and_all{
bottom:6px;
height:40px;
left:217px;
position:absolute;
width:300px;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
}
.share_absolute_all{
bottom:7px;
position:absolute;
right:12px;}
.message-blue_all{
color:#444444;
margin-bottom:1em;
padding:5px 20px 4px;
background-color:#E5E6FF;
border-bottom:1px solid #9D97FF; 
min-height:30px; 
margin-bottom:10px;
font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
font-size:11px;
}
a{ text-decoration:none;}

a:hover{text-decoration:underline;}
</style>

	<div style="width:auto; height:auto; margin:0px; padding-bottom:20px;">
		
		<div style="background-color:#EEEEEE; border:1px solid #DDDDDD; height:25px; margin-bottom:
		1em; padding:1em 0;">
		
		<div style="float:right; padding-right:10px;">
			<a href="http://apps.facebook.com/coollres/jobs.php?appid=<?php echo $appid;  ?>"><img src="http://facebook.coolres.com/coollres/media/to_admin.png" border="0" width="108" height="28" /></a>
			<a href="http://apps.facebook.com/coollres/post.php?appid=<?php echo $appid;  ?>"><img src="http://facebook.coolres.com/coollres/media/plus_post_jobs.png" border="0" width="116" height="28" /></a>
		</div>
		
		</div>
		
		<div style="width:100%; float:left;">
		
		<div class="message-blue_all">
		<center>
		Instantly get candidates for your jobs by activating a targeted Facebook Ad campaign.
	Try it now by clicking on <strong>Activate Ad Campaign</strong> in your <a href="#">Admin section.</a> 
		</center>
		
		</div>
		
		<div class="flefts_text">
            <input type="text" value="Search" name="keyword_filter" class="key_search" >
            <input type="button" id="value_submit" class="FB_button_ok" value="OK">
        </div>
		
<div class="border_all">
<?Php



$DB_HOST="localhost";

$DB_USERNAME="rams";

$pass="coolresrams";

$DB_NAME="coolres";

if($result = mysql_connect($DB_HOST,$DB_USERNAME,$pass) or die('Could not connect: ' . mysql_error()) )

echo"";

 else 

 echo"could not connect to db there is some error in your data base check it know";

$db = mysql_select_db($DB_NAME) or die (" <h1>could not connect to db there is some error in your data base check it know<h1>");

$query="select DISTINCT appid from post_job where appid='$appid'";
$q=mysql_query($query);
while($row=mysql_fetch_array($q))
{
 $app= $row['appid'];
 
 if($appid==$app)
 {
 
$qu="select * from post_job where appid='$appid'";
 $qu1=mysql_query($qu);
while($res=mysql_fetch_array($qu1))
{
?>



		
		
		
		
			<div class="list_all">
				<div class="pa_all">
				
				<div style="width:100%; margin:0px;">
				<span class="bigLink_all">
				<a href="apply.php?jobid=<?php echo $res['job_id']; ?>"><?php echo $res['job_title']; ?></a></span>
				
					<span class="littleGrey_all"><?php echo $res['date']; ?></span>
				</div>
					
					<div class="littleGrey_all" style="width:100%;">
					<b> <?php echo $res['job_location']; ?></b></div>
					
					<span class="button_desc_all">
					<a class="preview_all" href="#">Preview</a>
					
					</span>
					
					<span class="share_and_all">
						<span class="share_absolute_all">
				
						<span style="margin:0; float:left; padding-top:10px; padding-right:10px;">
				<span style="background:url(http://64.246.2.2/~a1pro/coollres/media/FB_icons.gif); 			
			background-position:0 -1595px; margin:0px; height:13px; width:15px; float:left"></span>
						<a href="#">Like</a></span>
							
							<span style="">
							<fb:share-button class="meta">
<meta name="medium" content="mult"/>
<meta name="title" content="Coolres is a job site"/>
<meta name="description" content="description of fan page"/>
<link rel="image_src" href="http://www.DOMAIN.comFacebook/activity_selection/img/n1.jpg" />
<link rel="target_url" href="http://facebook.coolres.com/coolres....."/>
</fb:share-button>
							
							
							
							</span>
						
						</span>
					</span>
				</div>
			</div>
			
			
			
		
		
	
<?php
}
}
else{
echo "hjgfdjhgdfhgdfhgdfhg";
?></div>
	</div>
	
	</div>

<table>

<tr> <td><h1>Congratulations- the application has been installed</h1></td><td></td></tr>

</table><table>

<tr><td><a href="http://apps.facebook.com/coollres/imp.php?id=<?php echo $_REQUEST['fb_sig_page_id'] ?>"><img src="http://facebook.coolres.com/coollres/img/import_jobs.png"></a></td><td>or</td> <td><a href="http://apps.facebook.com/coollres/post.php?id=<? $_REQUEST['fb_sig_page_id']?>"><img src="http://facebook.coolres.com/coollres/img/post_new_job.png">  </a> </td>

</tr>

<tr><td>automatically import your job from the<br> web</td><td></td><td>Type your job manuuly</td></tr>

<?php
}
}
?>


