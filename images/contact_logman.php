<?
session_start();
if(isset($_POST["s2"])){
	extract($_POST); 

if($_SESSION['sCaptcha']==$capcha){
}else{
echo"<script language='javascript' type='text/javascript'>
			alert(' capcha wrong !!! ');
			</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=contact_logman.php\"> ";

			exit();
}

$de="
		    Full Name : $name <br><br>\n
			Company : $company <br><br>\n
			Tel : $tel <br><br>\n
			Email : $email <br><br>\n
			Subject : $fax <br><br>\n
			Message : $subject <br><br>\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: jeab@azzagar.com \n"; 
$headers .= "Return-Path: jeab@azzagar.com  \n";		
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$emailTo="jeab@azzagar.com";
$subject="Contact from website Azzagar.com";
$msg="$de";

mail($emailTo, $subject, $msg, $headers);
echo"<script language='javascript' type='text/javascript'>
			alert('Thank you for contact');
			</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=contactthank_logman.php\"> ";


}else{

?>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="th">
<title>พื้นไม้สำเร็จรูป, ไม้บันไดทำสีสำเร็จ, พื้นลามิเนต</title>

<link rel="stylesheet" href="thumbnailviewer.css" type="text/css" />
<script src="thumbnailviewer.js" type="text/javascript">
</script>
<script language="javascript" src="FlashObject.js"></script>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}

function FP_swapImgRestore() {//v1.0
 var doc=document,i; if(doc.$imgSwaps) { for(i=0;i<doc.$imgSwaps.length;i++) {
  var elm=doc.$imgSwaps[i]; if(elm) { elm.src=elm.$src; elm.$src=null; } } 
  doc.$imgSwaps=null; }
}
// -->


<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImgRestore() {//v1.0
 var doc=document,i; if(doc.$imgSwaps) { for(i=0;i<doc.$imgSwaps.length;i++) {
  var elm=doc.$imgSwaps[i]; if(elm) { elm.src=elm.$src; elm.$src=null; } } 
  doc.$imgSwaps=null; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>

<!--
/*
 * jQuery Blueberry Slider v0.4 BETA
 * http://marktyrrell.com/labs/blueberry/
 *
 * Copyright (C) 2011, Mark Tyrrell <me@marktyrrell.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
-->

<link rel="stylesheet" href="blueberry.css" />
<style type="text/css">
<!--
body {
	
	font: 14px/20px Arial, San-Serif;
	color: #404040;
}
a { color: #264c99; text-decoration: none; }
a:hover { text-decoration: underline; }

h1,h2,h3,h4,p { margin-bottom: 0px; }
h1 {
	font-size: 48px;
	line-height: 60px;
	color: #ffffff;
	text-transform: lowercase;
}
h2, h3 {
	font-weight: normal;
	font-size: 22px;
	line-height: 40px;
	color: #808080;
}
h3 { font-size: 18px; color: #404040; }
h5 { font-weight: bold; font-size: 14px; color: #000; }

#header {
	height: 60px;
	padding-top: 0px; padding-bottom: 0px;
	text-align: center;
	background: #405580;
}
#header h1 {
	margin: 0 auto;
	min-width: 856px;
	max-width: 856px;
}
#doc { margin: 0px 0; }
#content {
	margin: 0 auto;
	min-width: 856px;
	max-width: 856px;
}

.blueberry { max-width: 856px; max-height: 423px; }

-->
.black-ribbon {   position: fixed;   z-index: 9999;   width: 70px; }
@media only all and (min-width: 768px) { .black-ribbon { width: auto; } }

.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="jquery.blueberry.js"></script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>

</head>
<script language="JavaScript" type="text/JavaScript">
   <!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
	//check string equal
		function isIn(str1,str2){	
		for(i=0;i<=str1.length;i++)
			if(str2.indexOf(str1.charAt(i))==-1)
				return false;
		return true;
	}
	function check(form){
				form=document.login;
					if(form.name.value == ''){
		alert("Input name");
		document.login.name.focus();
		return false;
	}
	if(form.email.value == ''){
		alert("Input email");
		document.login.email.focus();
		return false;
	}
			if(form.capcha.value == ''){
		alert("Input capcha ");
		document.login.capcha.focus();
		return false;
	}
		}
		
//-->
</script>

<body topmargin="0" leftmargin="0" >
<?
include("connect/connect.php");
?>


<div align="left">
	<table border="0" cellspacing="0" cellpadding="0" height="1092">
		<tr>
			<td height="458" valign="top">
			<table border="0" width="1203" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" >
				

						<tr bgcolor="#1C1610">
							<td bgcolor="#FFFFFF" height="684" valign="top" align="center">
							<div align="left">
							<table border="0" width="67%" cellspacing="0" cellpadding="0">
								<tr>
									<td bgcolor="#FFFFFF">
									<table border="0" width="100%" cellspacing="0" cellpadding="0"  >
							<tr>
								<td width="520">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="2">
						<p style="margin-left: 40px">
						<font face="Tahoma" style="font-size: 12pt" color="#000000">
						<b>LOGMAN INTERNATIONAL Co.,Ltd.</b><br>
						Address : 68 Soi Nakniwas 6 &nbsp;Lat Phrao, &nbsp;Bangkok &nbsp;10230</td>
					</tr>
					<tr>
						<td width="24%">&nbsp;</td>
						<td width="76%">&nbsp;</td>
					</tr>
					<tr>
						<td width="24%">
						<p style="margin-left: 40px; margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">E-mail :</td>
						<td width="76%">
						<p style="margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">
						<a href="mailto:Sales@logman.co.th">Sales@logman.co.th</a></td>
					</tr>
					<tr>
						<td width="24%">
						<p style="margin-left: 40px; margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">Tel:</td>
						<td width="76%">
						<p style="margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">(+66) 
						2-539-9696 (auto)</td>
					</tr>
					<tr>
						<td width="24%">
						<p style="margin-left: 40px; margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">Fax: </td>
						<td width="76%">
						<p style="margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">(+66) 
						2-539-8919</td>
					</tr>
					<tr>
						<td width="24%">
						<p style="margin-left: 40px; margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">Website:</td>
						<td width="76%">
						<p style="margin-top: 5px; margin-bottom: 5px">
						<font face="Tahoma" style="font-size: 12pt">
						<a href="http://www.logman.co.th">www.logman.co.th</a></td>
					</tr>
				</table>
								</td>
								<td valign="center">
							
								<p align="center">
								<a target="_blank" href="https://www.google.co.th/maps/place/LOGMAN+INTERNATIONAL+CO.,+LTD./@13.8027325,100.6060515,16z/data=!4m5!3m4!1s0x30e29d508facaf61:0xb0a7e29035ebea03!8m2!3d13.8027325!4d100.6104289?hl=en">
								<img border="0" src="../images/viewmap.png" width="120" height="117"></a>
								</a><br>
								<span lang="en-us">View our Google Map</span>
								
								</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td>
						<p style="margin-left: 40px"><span style="font-size: 13pt">
						<br>
						<br>
						<br>
						</span><font size="3">Please fill out the form below and 
						we will contact you shortly.</font></td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td>
						<div align="center">
							<div align="left">
							<table border="0" width="63%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="70%">
									<form id="login" name="login" method="post" action="contact_logman.php" onSubmit="return check(document.login)"">
                                      <div align="left">
                                      <table width="600" cellspacing="1" border="0">
									   <tr>
                                          <td width="164"><br></td>
                                        </tr>
                                        <tr>
                                          <td width="164">
											<p style="margin-left: 35px">Name:</td>
                                          <td colspan="2"><input name="name" type="text" size="50" maxlength="255" /></td>
                                        </tr>
                                        <tr>
                                          <td width="164">
											<p style="margin-left: 35px">Company 
											Name:</td>
                                          <td colspan="2"><input name="company" type="text" size="50" maxlength="255" /></td>
                                        </tr>
										<tr>
                                          <td>
											<p style="margin-left: 35px">Tel:</td>
                                          <td colspan="2"><input name="tel" type="text" size="50" maxlength="20" /></td>
                                        </tr>
										<tr>
                                          <td>
											<p style="margin-left: 35px">E-mail:</td>
                                          <td colspan="2"><input name="email" type="text" size="50" maxlength="20" /></td>
                                        </tr>
										<tr>
                                          <td>
											<p style="margin-left: 35px">Subject:</td>
                                          <td colspan="2"><input name="fax" type="text" size="50" maxlength="100" /></td>
                                        </tr>
                                        <tr>
                                          <td width="164">
											<p style="margin-left: 35px">Message:</td>
                                          <td colspan="2"><textarea name="subject" cols="51" rows="5" id="subject"></textarea>
                                            <br /> </td>
                                        </tr>
                                        <tr>
                                          <td>
											<p style="margin-left: 35px"><img src="/captcha.php" id="captcha" width="91" height="31" border="0" /></td>
                                          <td colspan="2"><input name="capcha" type="text" id="capcha" size="5" maxlength="4" />
                                          <a href="JavaScript: new_captcha();"><img border="0" width="20" alt="" src="/images/refresh.png" align="bottom" /></a></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                          <td width="62" align="left">
											<font size="3"><input type="submit" name="s2" value="Submit" /></font></td>
                                          <td width="317" align="left"><input type="reset" name="Submit2" value="Reset" />
										  
										  </td>
                                        </tr>
										

								        </table></td></tr></table></div>
							<p style="margin-bottom: 345px">&nbsp;</p></td></tr></table>
                                      </div>
                                      </form>
									  <script type="text/javascript">
<!--
function new_captcha()
{
var c_currentTime = new Date();
var c_miliseconds = c_currentTime.getTime();

document.getElementById('captcha').src = '/captcha.php?x='+ c_miliseconds;
}
-->
</script> 
									
									
									
									
									</td>
								</tr>
							</table>
							</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		
	</table>
</div>

</body>



</html>
<? } ?>