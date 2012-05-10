<?php session_start(); ob_start();
include_once '../lib/config.php';
// Include the facebook library config files.

// Set the API key and Secret.
$appapikey = 'af039b7afa18d3d3608a29aa25dbf9d0';
$appsecret = 'dba41e245cbd23004bf2a93076db8c7a';

$facebook = new Facebook($appapikey, $appsecret);

// force a login page


// Echo the "infinite session key" that everyone keeps talking about.
$user5=$facebook->api_client->session_key;

 $pieces = explode("-", $user5);
$pieces2=$pieces[1];
?>
<?php 
$DB_HOST="localhost";
$DB_USERNAME="cooles";
$pass="cool!@#RES";
$DB_NAME="a1professionals_coollres";

if($result = mysql_connect($DB_HOST,$DB_USERNAME,$pass) or die('Could not connect: ' . mysql_error()) )
echo"";
 else 
 echo"could not connect to db there is some error in your data base check it know";
$db = mysql_select_db($DB_NAME) or die (" <h1>could not connect to db there is some error in your data base check it know<h1>");
$job5=$_REQUEST['job5'];
$query="select * from post_job where job_id='$job5'";
$query2=mysql_query($query);

?>
<div class="fleft width100">

 <form name="fs" action="jobs" target="_top" method="POST">  
 
 
     <table class="editor" cellpadding="4">

            <tbody>
			<tr><td align="left"><h1><b>Edit Job</b></h1></td></tr>
				<tr><td align="left"><h1><b>Allow partners to post new job manually by adding the required fields.</b></h1></td></tr>
			</tbody></table>

    <table class="editor" cellpadding="4">

            <tbody>

			<?php
			while($row=mysql_fetch_array($query2))
			{
			
			
			?>
			<tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_title">Title</label></div>
        <small>(required)</small></td>
        <td><input name="job" class="inputtext" id="app404596412628_job_title" fbcontext="fb50f345d2ef" type="text" value="<?php echo $row['job_title']; ?>"></td>
      </tr>
	  
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_reference">Reference</label></div><small>(optional)</small></td>
        <td><input name="reference" class="inputtext" id="app404596412628_job_reference" fbcontext="fb50f345d2ef" type="text" value="<?php echo $row['job_reference']; ?>"></td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_location">Location</label></div><small>(required)</small></td>
        <td><input name="location" class="inputtext" id="app404596412628_job_location" fbcontext="fb50f345d2ef" type="text" value="<?php echo $row['job_location']; ?>"></td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_country">Country</label></div><small>(required)</small></td>
        <td><select name="country" id="app404596412628_job_country" fbcontext="fb50f345d2ef">
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="1">Americas</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="142">Asia</option>
<option value="AU">Australia</option>
<option value="43">Australia and New Zealand</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="2">Caribbean</option>
<option value="CI">Côte d’Ivoire</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="11">Central America</option>
<option value="143">Central Asia</option>
<option value="TD">Chad</option>
<option value="830">Channel Islands</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos [Keeling] Islands</option>
<option value="CO">Colombia</option>
<option value="172">Commonwealth of Independent States</option>
<option value="KM">Comoros</option>
<option value="CG">Congo - Brazzaville</option>
<option value="CD">Congo - Kinshasa</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="200">Czechoslovakia</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="12">Eastern Africa</option>
<option value="24">Eastern Asia</option>
<option value="151">Eastern Europe</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="150">Europe</option>
<option value="QU">European Union</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong SAR China</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="419">Latin America and the Caribbean</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau SAR China</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="44">Melanesia</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="47">Micronesian Region</option>
<option value="15">Middle Africa</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar [Burma]</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="13">Northern Africa</option>
<option value="17">Northern America</option>
<option value="154">Northern Europe</option>
<option value="MP">Northern Mariana Islands</option>
<option value="KP">North Korea</option>
<option value="NO">Norway</option>
<option value="0">Oceania</option>
<option value="OM">Oman</option>
<option value="QO">Outlying Oceania</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territories</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn Islands</option>
<option value="PL">Poland</option>
<option value="49">Polynesia</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">São Tomé and Príncipe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="CS">Serbia and Montenegro</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="5">South America</option>
<option value="50">South-Central Asia</option>
<option value="29">South-Eastern Asia</option>
<option value="28">Southern Asia</option>
<option value="3">Southern Europe</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="KR">South Korea</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US" selected="selected">United States</option>
<option value="ZZ">Unknown or Invalid Region</option>
<option value="UY">Uruguay</option>
<option value="UM">U.S. Minor Outlying Islands</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WF">Wallis and Futuna</option>
<option value="9">Western Africa</option>
<option value="145">Western Asia</option>
<option value="155">Western Europe</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select></td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_contract">Contract type</label></div><small>(required)</small></td>
        <td><select name="contract" id="app404596412628_job_contract" fbcontext="fb50f345d2ef">
<option selected="selected" value="1">Permanent</option>
<option value="2">Temporary</option>
<option value="3">Internship</option>
<option value="undefined">Undefined</option>
</select></td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_category">Category</label></div><small>(required)</small></td>
        <td><select name="category" id="app404596412628_job_category" fbcontext="fb50f345d2ef">
<option selected="selected" value="1">Accounting</option>
<option value="2">Admin &amp; Clerical</option>
<option value="4">Banking &amp; Finance</option>
<option value="3">Contract &amp; Freelance</option>
<option value="5">Customer Service</option>
<option value="6">Engineering</option>
<option value="7">Executive</option>
<option value="8">Franchise</option>
<option value="9">Government</option>
<option value="10">Health Care</option>
<option value="11">Hospitality</option>
<option value="12">Human Resources</option>
<option value="13">Information Technology</option>
<option value="14">Manufacturing</option>
<option value="15">Nonprofit</option>
<option value="16">Retail</option>
<option value="17">Sales &amp; Marketing</option>
<option value="18">Science &amp; Biotech</option>
<option value="19">Transportation</option>
<option value="undefined">Undefined</option>
</select></td>
      </tr>
      <tr class="textarea">
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_description">Description</label></div><small>(required)</small></td>
        <td><textarea rows="4" cols="30" name="description" class="ta-big" id="app404596412628_job_description" fbcontext="fb50f345d2ef"><?php echo $row['job_description']; ?>"</textarea></td>
      </tr>
      <tr class="textarea">
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_responsibilities">Responsibilities</label></div><small>(optional)</small></td>
        <td><textarea rows="4" cols="30" name="responsibilities" class="ta-big" id="app404596412628_job_responsibilities" fbcontext="fb50f345d2ef"></textarea></td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_apply_method">Receive applications by</label></div><small>(required)</small></td>
        <td>
                              <select name="apply_method" class="no-ma" id="app404596412628_job_apply_method" fbcontext="fb50f345d2ef">
<option selected="selected" value="email">Email</option>
<option value="url">URL</option>
</select>          <input name="apply_address" class="inputtext" style="vertical-align: top;" id="app404596412628_job_apply_address" fbcontext="fb50f345d2ef" type="text" value="<?php echo $row['job_apply_method']; ?>">        </td>
      </tr>
      <tr>
        <td class="label"><div class="pr05"><label class="row_description" for="app404596412628_job_expires_at">Expiration date</label></div><small>(required)</small></td>
        <td><select name="month" id="app404596412628_job_expires_at_month" fbcontext="fb50f345d2ef">
<option value=""></option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11" selected="selected">November</option>
<option value="12">December</option>
</select>/<select name="day" id="app404596412628_job_expires_at_day" fbcontext="fb50f345d2ef">
<option value=""></option>
<option value="1" selected="selected">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>/<select name="year" id="app404596412628_job_expires_at_year" fbcontext="fb50f345d2ef">
<option value=""></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010" selected="selected">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select>        <span>
          <input name="expires_never" class="no-ma" style="vertical-align: middle;" id="app404596412628_job_expires_never" fbcontext="fb50f345d2ef" type="checkbox">          <label for="app404596412628_job_expires_never">This job never expires</label>        </span>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
            <label for="app404596412628_publish" style="vertical-align: baseline; height: 13px;"><input id="app404596412628_publish" name="publish" onClick="fbjs_sandbox.instances.a404596412628.bootstrap();return fbjs_dom.eventHandler.call([fbjs_dom.get_instance(this,404596412628),function(a404596412628_event) {a404596412628_publish()},404596412628],new fbjs_event(event));return true;" value="1" class="no-ma" style="vertical-align: top;" fbcontext="fb50f345d2ef" type="checkbox"> <span style="vertical-align: middle;">Post this job on your Page's Wall to make it more visible.</span></label>
        </td>
      </tr>
	  <?php
	  }
	  ?>
      <tr>
        <td>&nbsp;</td>
       
	<td><input name="job5" class="inputtext" id="app404596412628_job_title" fbcontext="fb50f345d2ef" type="hidden" value="<?php echo $job5;?>"></td>
	<td>
            <div class="FB_input">
                <input class="editorkit_button action" value="Post Joob" id="app404596412628_submit" type="submit" name="submit">
            </div>
        </td>
      </tr>
    </tbody></table>
</form>


<?php
extract($_REQUEST);
$job=$_REQUEST['job'];
$reference=$_REQUEST['reference'];
$location=$_REQUEST['location'];
$country=$_REQUEST['country'];
$contract=$_REQUEST['contract'];
$category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$responsibilities=$_REQUEST['responsibilities'];
$apply_method=$_REQUEST['apply_method'];
$apply_address=$_REQUEST['apply_address'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$year=$_REQUEST['year'];
$expires_never=$_REQUEST['expires_never'];
$publish=$_REQUEST['publish'];
if(isset($_REQUEST['submit']))
{
 $query="update post_job set  
                                         job_title='$job',
										 job_reference='$reference',
										 job_location='$location',
										 job_country='$country',
										 job_contract='$contract',
										 job_category='$category',
										 job_description='$description',
										 job_responsibilities='$responsibilities',
										 job_apply_method='$apply_method',   
										 job_apply_address='$apply_address',
										 job_month='$month',
										 job_day='$day',
										 job_year='$year',
										 expires_never='$expires_never',
										 user_id='$pieces2',
										  publish='$publish'
										  where job_id='$job'";
											  $query1=mysql_query($query);
	}
	?>

