<html>

<!-- #BeginTemplate "Templates/MainHome.dwt" -->

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<!-- #BeginEditable "doctitle" -->
<title>LASV.ORG &gt;&gt; Los Altos Academy of Engineering</title>
<style type="text/css">
.box-paraalign {
	margin-top: 0;
	margin-bottom: 0;
	font-family: Verdana;
	font-size: 10pt;
	font-weight: normal;
	color: #000000;
}
.standard {
	font-family: Verdana;
	font-size: 10pt;
	color: #000000;
	font-weight: normal;
	font-variant: normal;
	font-style: normal;
}
.hometitle {
	font-size: 14pt;
	color: #444444;
	font-family: Verdana;
	font-weight: bold;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
}
.style9 {
	margin-top: 0;
	margin-bottom: 0;
	font-family: Verdana;
	font-size: 11pt;
	font-weight: normal;
	color: #000000;
}
.style24 {
	border-width: 0;
	border-collapse: collapse;
}
.style29 {
	border-style: solid;
	border-width: 1px;
}
.style30 {
	text-align: center;
}
.style34 {
	text-align: left;
}
.style35 {
	font-size: 10pt;
	font-family: Verdana;
}
.style37 {
	margin-top: 0;
	margin-bottom: 0;
	font-family: Verdana;
	font-size: 10pt;
	font-weight: normal;
	color: #444444;
	}
.style38 {
	font-family: "BankGothic Md BT";
	font-size: large;
}
.style39 {
	font-size: medium;
}
.style40 {
	font-family: Verdana;
	font-size: medium;
}
.style41 {
	text-transform: uppercase;
}
.style42 {
	font-family: Verdana;
	font-weight: bold;
	font-style: normal;
	font-variant: normal;
}
.style44 {
	font-size: 13pt;
}
.style45 {
	border-width: 0px;
}
.style46 {
	font-family: Verdana;
	font-weight: bold;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
}
.style47 {
	border-width: 0;
}
</style>
<link rel="stylesheet" type="text/css" href="main.css">
<!-- #EndEditable -->
<style type="text/css">

/*Credits: Dynamic Drive CSS Library */
/*URL: http://www.dynamicdrive.com/style/ */

.suckertreemenu ul{
margin: 0;
padding: 0;
list-style-type: none;
}

/*Top level list items*/
.suckertreemenu ul li{
position: relative;
display: inline;
float: left;
font-family: Verdana;
font-size: 9pt;
background-color: #979797; /*overall menu background color*/
}

/*Top level menu link items style*/
.suckertreemenu ul li a{
display: block;
width: 0px; /*Width of top level menu link items*/
height: 20px;
padding: 2px 0px;
border: 1px solid gray;
border-left-width: 1pt;
text-decoration: none;
color: #111111;
}
	
/*1st sub level menu*/
.suckertreemenu ul li ul{
left: 0;
position: absolute;
top: 1em; /* no need to change, as true value set by script */
display: block;
visibility: hidden;
}

/*Sub level menu list items (undo style from Top level List Items)*/
.suckertreemenu ul li ul li{
display: list-item;
float: none;
}

/*All subsequent sub menu levels offset after 1st level sub menu */
.suckertreemenu ul li ul li ul{ 
left: 159px; /* no need to change, as true value set by script */
top: 0;
}

/* Sub level menu links style */
.suckertreemenu ul li ul li a{
display: block;
width: 190px; /*width of sub menu levels*/
height: 20px;
color: #121212;
text-decoration: none;
padding: 0px 3px;
border: 1px solid gray;
}

.suckertreemenu ul li a:hover{
background-color: #111111;
color: #DADADA;
}

/*Background image for subsequent level menu list links */
.suckertreemenu .subfoldericon{
background: #979797 url('Templates/images/mainmenu/arrow-right.gif') no-repeat right 50%;
}


/* Holly Hack for IE \*/
* html .suckertreemenu ul li ul li { float: left;}
/* End */

/* End */


}
.style1 {
	font-size: 7pt;
}
.style2 {
	font-size: 8pt;
	font-family: Verdana;
	font-weight: 500;
	font-style: normal;
	font-variant: normal;
}


.style5 {
	vertical-align: middle;
	border-style: solid;
	border-width: 0;
}
.style6 {
	border-width: 0;
	font-size: 8pt;
}


.pagehead {
	background-image: url('Templates/images/mainheader/pagehead_bkg.png');
}


</style>

<script type="text/javascript">

//SuckerTree Horizontal Menu (Sept 14th, 06)
//By Dynamic Drive: http://www.dynamicdrive.com/style/

var menuids=["treemenu1"] //Enter id(s) of SuckerTree UL menus, separated by commas

function buildsubmenus_horizontal(){
for (var i=0; i<menuids.length; i++){
  var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
    for (var t=0; t<ultags.length; t++){
		if (ultags[t].parentNode.parentNode.id==menuids[i]){ //if this is a first level submenu
			ultags[t].style.top=ultags[t].parentNode.offsetHeight+"px" //dynamically position first level submenus to be height of main menu item
			ultags[t].parentNode.getElementsByTagName("a")[0].className="mainfoldericon"
		}
		else{ //else if this is a sub level menu (ul)
		  ultags[t].style.left=ultags[t-1].getElementsByTagName("a")[0].offsetWidth+"px" //position menu to the right of menu item that activated it
    	ultags[t].parentNode.getElementsByTagName("a")[0].className="subfoldericon"
		}
    ultags[t].parentNode.onmouseover=function(){
    this.getElementsByTagName("ul")[0].style.visibility="visible"
    }
    ultags[t].parentNode.onmouseout=function(){
    this.getElementsByTagName("ul")[0].style.visibility="hidden"
    }
    }
  }
}

if (window.addEventListener)
window.addEventListener("load", buildsubmenus_horizontal, false)
else if (window.attachEvent)
window.attachEvent("onload", buildsubmenus_horizontal)

</script>

<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body style="background-attachment: fixed; background-color: #000000; margin-top: 0; margin-bottom: 0;">

<div align="center">
	<table border="0" cellpadding="0" width="895" style="border-collapse: collapse">
		<tr>
			<th height="100" width="250" bgcolor="#FFFFFF">
			<!-- MSCellType="ContentHead" -->
			<p align="center" style="margin-top: 0; margin-bottom: 0">
			<img src="Templates/images/mainheader/laae_logo.gif" width="248" height="62"></th>
			<th height="100" align="left" bgcolor="#FFFFFF" width="677" class="pagehead">
&nbsp;</th>
		</tr>
		</table>
	<table border="0" cellpadding="0" width="895" style="border-collapse: collapse" height="0">
		<tr>
			<td align="center" height="20" bordercolorlight="#808080" bordercolordark="#808080" bgcolor="#808080" width="889">
<table border="0" cellpadding="0" style="border-collapse: collapse; width: 885px;" id="table1">
		<tr>
			<td align="center" bordercolorlight="#808080" bordercolordark="#808080" bgcolor="#808080" width="881" style="height: 13px">
			<div class="suckertreemenu">
		<ul id="treemenu1" style="height: 17px; width: 895px;">
		<li style="left: 0px; top: 0px; width: 60px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="index.php" style="width: 60px">
		Home</a></li>
		<li style="left: 0px; top: 0px; width: 85px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="about/index.htm" style="width: 85px">About Us</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="about/mission/index.htm">
			Mission Statement</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="about/offerings/index.htm">
			Course Offerings</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="about/tradition/index.htm">
			Winning Tradition</a>
			<ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="about/tradition/vehicles/index.htm">
			Legacy Vehicles</a></li>
			<li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="about/tradition/hpa/index.htm">Human Powered Airplane</a></li>
		    </ul>
		    </li>

		</ul>
		</li>
		<li style="left: 0px; top: 0px; width: 70px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="news/index.htm" style="width: 70px">News</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="news/updates/index.htm">
			Event Updates</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="news/publications/index.htm">
			Publications</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="news/calendar/index.htm">
			Calendar</a></li>

		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 75px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="projects/index.htm" style="width: 75px">Projects</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="projects/botball/index.htm">
			Botball</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="projects/bydv/index.htm">
			Build Your Dream Vehicle</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0"><a href="http://www.laaedarpachallenge.org/">
			Autonomous Vehicle</a></li>		  
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="projects/infusion/index.html">
			Infusion Fuel Cell Vehicle</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="projects/jpl/index.htm">
			JPL</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="projects/solarboat/index.htm">
			Solar Boat</a></li>
		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 155px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="programs/index.htm" style="width: 155px">Programs We Sponsor</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="programs/isaaq/index.htm">
			ISAAQ</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="programs/msrobotics/index.htm">
			Middle School Robotics</a></li>
		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 120px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="laaefamily/index.htm" style="width: 120px">The LAAE Family</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/acm/index.htm">
			Advisory Committee</a>
			<ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/acm/2007/index.htm">
			2007</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/acm/2006/index.htm">
			2006</a></li>
		    </ul>		  
		   </li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/alumni/index.htm">
			Alumni</a>
		    <ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/alumni/statements/index.htm">
			Personal Statements</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/alumni/gallery.htm">
			Photo Gallery</a></li>
		    </ul>
			</li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/advisors/index.htm">
			Advisors</a>
		    <ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/advisors/rfranz.htm">
			Robert Franz</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/advisors/mkeirns.htm">
			Mike Keirns</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/advisors/erichter.htm">
			Ed Richter</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/advisors/jbrown.htm">
			Jason Brown</a></li>
		    </ul>
		  </li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/index.htm">
			Students</a></p>
			<ul>
			<li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2008/index.htm">
			2007-2008</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2007/index.htm">
			2006-2007</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2006/index.htm">
			2005-2006</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2005/index.htm">
			2004-2005</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2004/index.htm">
			2003-2004</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="laaefamily/students/2002/index.htm">
			2001-2002</a></li>
		    </ul>
		   </li>
		</ul>
		</li>
		<li style="left: 0px; top: 0px; width: 105px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="galleries/index.htm" style="width: 105px">Photo Galleries</a>
		</li>
		
		
		<li style="left: 0px; top: 0px; width: 75px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="sponsors.htm" style="width: 75px">Sponsors</a></li>
		<li style="left: 0px; top: 0px; width: 65px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="links.htm" style="width: 65px">Links</a></li>
		
		<li style="left: 0px; top: 0px; width: 83px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="contact.htm" style="width: 83px; border-right: 0">
		Contact Us</a></li>
		
		</ul>
		</div>
		
		</td>
		</tr>
		</table>
		</td>
		</tr>
		</table>
	<table border="0" cellpadding="0" width="895" style="border-collapse: collapse">
		<tr>
			<td align="center" height="15" width="937">
			<!-- MSCellType="ContentHead" -->
			&nbsp;</td>
		</tr>
		<tr>
			<td align="center" width="937" bgcolor="#DADADA" height="35">
			<!-- MSCellType="ContentHead" -->
			<!-- #BeginEditable "Main" -->
			<div align="center" class="style01">
				<h1>
				<img src="images/contentheader/homelaae.JPG" width="895" height="85"></h1>
				<table border="0" width="875" id="table4">
					<tr class="box-paraalign">
						<td valign="top" rowspan="5" class="style34">
						<hr>
						<strong>The Los Altos Academy of Engineering has 
						received a Scion&nbsp; XB as a Donation from Scion, to view the Press Release click
						<a href="news/publications/brochures/scion%20press%20release.pdf">
						here</a>.</strong><br>
						<hr>
						<p class="style34">
						<strong>The Los Altos Academy of Engineering has posted 
						our new sponsorship packet. If you would like to make a 
						donation to our program, click
						<a href="news/publications/press/sponsorship%20packet.pdf">here</a>.</strong></p>
						<p class="style30">
						&nbsp;</p>
						<hr>
						<p class="style30">
						<a href="http://www.laaedarpachallenge.org/">
						<img src="images/home/zeus-darpa.gif" width="210" height="42" class="style29"></a></p>
						<hr>
							<div class="style30">
							<a href="news/calendar/index.htm"><img src="http://www.google.com/calendar/images/ext/gc_button1_en.gif" border=0></a></div>
						</td>
						<td width="600" align="center" valign="top" class="style38">
						<h1 class="style39">&nbsp;</h1>
						</td>
		
					</tr>
					<tr class="box-paraalign">
						<td width="600" align="center" valign="top">
						<a href="news/publications/scion_xb_release.htm">
						<img alt="" src="images/scion%20pics/scion_title.jpg" width="550" height="412" class="style45"></a><br>
						</td>
		
					</tr>
					<tr>
						<td width="600" align="center" valign="top" height="21" class="style40">
						<strong class="style46"><span class="style41">
						<span class="style42"><span class="style44">Scion donated a scion xb to the 
						laae!</span></span></span><span class="style44"><br>
						</span></strong><span class="style44">
						<strong class="style46">THANK YOU SCION!</strong></span></td>
					</tr>
					<tr>
						<td width="600" align="center" valign="top" height="21">
						<hr></td>
					</tr>
					<tr>
						<td width="600" align="center" valign="top">
				<p align="center" class="style9">
				<img src="images/contentheader/subheader-newsflash.JPG" width="530" height="34"><a title="Login to add news events" href="/newscp/"><img longdesc="Unlock editing mode" src="images/home/img1F.gif" alt="[]" style="width: 23px" class="style47"></a></p>
											<div align="center">
							
							<!--                           -->
							<!-- DONT EDIT BELOW THIS LINE -->
							<!--                           -->

				<table id="table6" cellspacing="4" class="style24" style="width: 575px; height: 100px;" cellpadding="2">
					<tr>
						<td valign="top" class="style35" style="width: 100px">
						<strong>04/10/2008
</strong></td>
						<td class="style37" valign="top">
						
						<strong>Shell Eco Marathon</strong>
</td>
					</tr>
					<tr>
						<td valign="top" class="style35" style="width: 100px">
						<strong>03/15/2008
</strong></td>
						<td class="style37" valign="top">
						
						<strong>Botball Regional Competition at USD</strong>
</td>
					</tr>
					<tr>
						<td valign="top" class="style35" style="width: 100px">
						<strong>03/04/2008
</strong></td>
						<td class="style37" valign="top">
						
						<strong><strong>LAAE Booster Club Meeting at 7 p.m. in A14</strong></strong></td>
					</tr>
					</table></div>
							</td>
					</tr>
				</table>
				<!--                           -->
				<!-- DONT EDIT ABOVE THIS LINE -->
				<!--                           -->

				<p class="box-paraalign">
				<br>
				</p>
			</div>
			
			<!-- #EndEditable --></td>
		</tr>
		<tr>
			<td align="center" height="15" width="937">
			<!-- MSCellType="ContentHead" -->
			&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" height="75" bordercolor="#808080" bgcolor="#808080">
			<!-- MSCellType="NavBody" -->
			<p class="style1" align="center">
&nbsp;</p>
			<p class="style2" align="center">
© Los Altos Academy of Engineering. All rights reserved.</p>
			<p class="style2" align="center">
			All photographs, designs, and videos presented within this site are 
			solely owned by the Los Altos Academy of Engineering.</p>
			<p align="center">
			<span class="style2">If you have questions or comments 
			about this website, please contact the Information Technology team:
			</span><a class="style6" href="mailto:infotech@lasv.org">
			INFOTECH@LASV.ORG</a><span class="style2">.</span><p class="style2" align="center">
			&nbsp;</p>
			<p align="center">
			<span class="style2">LASV.org Web v9.5.1, by the </span>
			<a class="style6" href="laaefamily/students/2008/infotechnology/index.htm">LAAE Information Technology</a><span class="style2"> 
			team.</span><p align="center" class="style6">
			<span class="style2">Web hosting provided by: </span>
			<a href="http://www.vividnet.com/" class="style2">
			<img alt src="Templates/images/footer/logo-vividnet.JPG" width="30" height="21" class="style5"></a>
			<a href="http://www.vividnet.com/" class="style6">VividNET</a><p align="center">
			&nbsp;</td>
		</tr>
		</table>
</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1154984-1";
urchinTracker();
</script>

</body>

<!-- #EndTemplate -->

</html>