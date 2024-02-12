<html>

<!-- #BeginTemplate "../Templates/EventBoard.dwt" -->

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<!-- #BeginEditable "doctitle" -->
  <title>LASV.ORG &gt;&gt; News and Events Board: Post Index</title>
<style type="text/css">
.style17 {
	text-align: center;
}
.style18 {
	border-style: solid;
	border-color: #FFFFFF;
	background-color: #FFFFFF;
	text-align: left;
}
</style>
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
background: #979797 url('../Templates/images/mainmenu/arrow-right.gif') no-repeat right 50%;
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


.style6 {
	border-width: 0;
	font-size: 8pt;
}


.style8 {
	border-style: solid;
	border-color: #FFFFFF;
	background-color: #FFFFFF;
}
.style9 {
	border-style: solid;
	border-color: #C0C0C0;
	background-color: #DADADA;
}
.style10 {
	border-style: solid;
	border-color: #C0C0C0;
}
.style11 {
	text-align: right;
	border-style: solid;
	border-color: #C0C0C0;
	background-color: #DADADA;
}
.style12 {
	text-align: right;
	font-size: 16pt;
}
.style13 {
	font-size: 8pt;
	text-align: right;
}
.style14 {
	text-align: right;
}


.style15 {
	font-size: 8pt;
	font-family: Verdana;
	font-weight: 500;
	font-style: normal;
	font-variant: normal;
	text-align: center;
}


.style16 {
	font-size: 8pt;
	font-family: Verdana;
	font-weight: bold;
	font-style: normal;
	font-variant: normal;
	text-align: center;
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

<link rel="stylesheet" type="text/css" href="../main.css">

</head>

<body style="background-attachment: fixed; background-color: #979797;">

<div align="center">
	<table border="0" cellpadding="0" width="895" style="border-collapse: collapse">
		<tr>
			<th height="100" width="250" bgcolor="#FFFFFF" class="style10">
			<!-- MSCellType="ContentHead" -->
			<p align="center" style="margin-top: 0; margin-bottom: 0">
			<img alt border="0" src="../Templates/images/mainheader/laae_logo.gif" width="248" height="85" align="middle"></th>
			<th height="100" width="677" class="style11">
<p class="style13">&nbsp;<a href="../board/postindex.php">View Posts</a> |
<a href="../board/userresults.php">View User Accounts</a> | 
<a href="../board/newpost.php">Create Post</a> | Terms of Use (coming soon)</p>
<p class="style14">&nbsp;</p>
<p class="style14">&nbsp;</p>
<p class="style14">&nbsp;</p>
<p class="style12"><strong>NEWS AND EVENTS BOARD</strong></p>
			</th>
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
		<a href="../index.htm" style="width: 60px">
		Home</a></li>
		<li style="left: 0px; top: 0px; width: 85px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../about/index.htm" style="width: 85px">About Us</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../about/mission/index.htm">
			Mission Statement</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../about/offerings/index.htm">
			Course Offerings</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../about/tradition/index.htm">
			Winning Tradition</a>
			<ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../about/tradition/vehicles/index.htm">
			Legacy Vehicles</a></li>
			<li>
			<p style="margin-top: 0; margin-bottom: 0"><a href="../about/tradition/hpa/index.htm">Human Powered Airplane</a></li>
		    </ul>
		    </li>

		</ul>
		</li>
		<li style="left: 0px; top: 0px; width: 70px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../news/index.htm" style="width: 70px">News</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../news/updates/index.htm">
			Event Updates</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../news/publications/index.htm">
			Publications</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../news/calendar/index.htm">
			Calendar</a></li>

		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 75px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../projects/index.htm" style="width: 75px">Projects</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../projects/botball/index.htm">
			Botball</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../projects/bydv/index.htm">
			Build Your Dream Vehicle</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0"><a href="http://www.laaedarpachallenge.org/">
			Autonomous Vehicle</a></li>		  
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../projects/infusion/index.html">
			Infusion Fuel Cell Vehicle</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../projects/jpl/index.htm">
			JPL</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../projects/solarboat/index.htm">
			Solar Boat</a></li>
		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 155px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../programs/index.htm" style="width: 155px">Programs We Sponsor</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../programs/isaaq/index.htm">
			ISAAQ</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../programs/msrobotics/index.htm">
			Middle School Robotics</a></li>
		  </ul>
		</li>
		<li style="left: 0px; top: 0px; width: 120px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../laaefamily/index.htm" style="width: 120px">The LAAE Family</a>
		  <ul>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/acm/index.htm">
			Advisory Committee</a></li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/alumni/index.htm">
			Alumni</a>
		    <ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/alumni/statements/index.htm">
			Personal Statements</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/alumni/gallery.htm">
			Photo Gallery</a></li>
		    </ul>
			</li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/advisors/index.htm">
			Advisors</a>
		    <ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/advisors/rfranz.htm">
			Robert Franz</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/advisors/mkeirns.htm">
			Mike Keirns</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/advisors/erichter.htm">
			Ed Richter</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/advisors/jbrown.htm">
			Jason Brown</a></li>
		    </ul>
		  </li>
		  <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/index.htm">
			Students</a></p>
			<ul>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2008/index.htm">
			2007-2008</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2007/index.htm">
			2006-2007</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2006/index.htm">
			2005-2006</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2005/index.htm">
			2004-2005</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2004/index.htm">
			2003-2004</a></li>
		    <li>
			<p style="margin-top: 0; margin-bottom: 0">
			<a href="../laaefamily/students/2002/index.htm">
			2001-2002</a></li>
		    </ul>
		   </li>
		</ul>
		</li>
		<li style="left: 0px; top: 0px; width: 105px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../galleries/index.htm" style="width: 105px">Photo Galleries</a>
		</li>
		
		
		<li style="left: 0px; top: 0px; width: 75px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../sponsors.htm" style="width: 75px">Sponsors</a></li>
		<li style="left: 0px; top: 0px; width: 65px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../links.htm" style="width: 65px">Links</a></li>
		
		<li style="left: 0px; top: 0px; width: 83px">
		<p style="margin-top: 0; margin-bottom: 0">
		<a href="../contact.htm" style="width: 83px; border-right: 0">
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
			<td align="center" width="937" class="style8" style="height: 35px">
			<!-- MSCellType="ContentHead" -->
			<!-- #BeginEditable "Main" -->
<h2 class="style17">POST INDEX</h2>
			<hr>
			<p>&nbsp;</p>
