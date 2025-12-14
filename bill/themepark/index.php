<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<link href='http://fonts.googleapis.com/css?family=Mountains+of+Christmas' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<title>Enchantment</title>
<style type="text/css"> 
<!-- 
body  {
	font: 100% Cabin, Arial, Helvetica, sans-serif;
	background: #E567B1;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.thrColAbsHdr #container { 
	position: relative; /* adding position: relative allows you to position the two sidebars relative to this container */
	width: 780px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 

/* Tips for absolutely positioned sidebars with header and footer:
1. Absolutely positioned (AP) elements must be given a top and side value, either right or left. (As a default, if no top value is given, the AP element will begin directly after the last element in the source order of the page. This means, if the sidebars are first element in the #container in the document's source order, they will appear at the top of the #container even without being given a top value. However, if they are moved later in the source order for any reason, they'll need a top value to appear where you desire.
2. Absolutely positioned (AP) elements are taken out of the flow of the document. This means the elements around them don't know they exist and don't account for them when taking up their proper space on the page. Thus, an AP div should only be used as a side column if you are sure the middle #mainContent div will always contain the most content. If either sidebar were to contain more content, that sidebar would run over the bottom of the parent div, and in this case the footer as well, and the sidebar would not appear to be contained.
3. If the above mentioned requirements are met, absolutely positioned sidebars can be an easy way to control the source order of the document.
4. If the source order is changed, the top value should be equal to the height of the header since this will cause the columns to visually meet the header.
*/
.thrColAbsHdr #header {
	height: 116px; /* if you're changing the source order of the columns, you'll may want to use a height on the header so that you can give the columns a predictable top value */
	background: #F6B9DD;
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.thrColAbsHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
	font-family: "Mountains of Christmas";
	font-size: 36px;
}
.thrColAbsHdr #sidebar1 {
	position: absolute;
	top: 119px;
	left: 0;
	width: 150px; /* the actual width of this div, in standards-compliant browsers, or standards mode in Internet Explorer will include the padding and border in addition to the width */
	background: #E5399E; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 10px 15px 20px; /* padding keeps the content of the div away from the edges */
}
.thrColAbsHdr #sidebar2 {
	position: absolute;
	top: 118px;
	right: 2px;
	width: 160px; /* the actual width of this div, in standards-compliant browsers, or standards mode in Internet Explorer will include the padding and border in addition to the width */
	background: #982669; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 10px 15px 20px; /* padding keeps the content of the div away from the edges */
}
.thrColAbsHdr #mainContent { 
	margin: 0 200px; /* the right and left margins on this div element creates the two outer columns on the sides of the page. No matter how much content the sidebar divs contain, the column space will remain. */
	padding: 0 10px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background-color:whitesmoke;
}
.thrColAbsHdr #footer { 
	padding: 0 10px 0 20px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#84004D;
} 
.thrColAbsHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
h2 {
	font-family: "Mountains of Christmas", Arial, Helvetica, sans-serif;
	font-size: 24px;
}
h3 {
	font-family: "Mountains of Christmas", Arial, Helvetica, sans-serif;
	font-size: 20px;
}
--> 
</style>
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.thrColAbsHdr #sidebar1 { width: 180px; }
.thrColAbsHdr #sidebar2 { width: 190px; }
</style>
<![endif]--></head>

<body class="thrColAbsHdr">

<div id="container">
  <div id="header">
    <img src="graphics/enchfullogo.png" alt="Enchantment" width="50%" /><img src="graphics/forest.jpg" alt="forest" height="116" /><img src="graphics/teacups.jpg" alt="forest" height="116" /><img src="graphics/coaster1.jpg" alt="forest" height="116" />
  <!-- end #header --></div>
  <div id="sidebar1">
  <h3>Visit Enchantment!</h3>
    <p>Enchantment is a new, exciting and thrilling fairytale experience in the heart of Auckland NZ.</p>
    <p>Enchantment features some of the world's fastest, highest and most crazy rollercoasters as well as lush forests, huge castles, real towns, waterslides and more!</p>
    <p>      Enjoy the hot weather of Auckland combined with the area's natural beauty with awesome rides and unbelievable architecture.<!-- end #sidebar1 --></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><img src="graphics/coaster1.jpg" alt="forest" height="150" /></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="sidebar2">
    <h3>Where dreams come true!</h3>
    <p><strong>S</strong>ome folks will often talk about the infamous house of terror with a huge mansion and giant hallways, this is a sure shocker!</p>
    <p><strong>U</strong>ndoubtably the Dragon Spirit ride will bring out the thrills with the eastern culture and speeds of up to 76MPH!</p>
    <p><strong>M</strong>ore often than not you'll want to see the beautiful lands the park is near and with the nature reserve you can view some of the local animals and wildlife!</p>
    <p><strong>O</strong>verall Enchanted has something for everyone, book online right here, right now!</p>
    <p align="center"><img src="graphics/teacups.jpg" alt="forest" height="150" /></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
  <!-- end #sidebar2 --></div>
  <div id="mainContent">
    <h1><img src="graphics/coaster.jpg" alt="coaster" width="151" height="148" /><img src="graphics/coaster2.jpg" alt="coaster 2" width="186" height="182" /></h1>
    <h2>The Big Wave Wateride</h2>
    <p>The Big Wave wateride is sure to make a splash with huge drops and waterfalls!</p>
	<p><img src="graphics/flume.jpg" alt="flume ride" width="350" height="344" /></p>
	<h2>The KingKa</h2>
	<p>The KingKa also boasts the largest size to speed ratio of any roller coaster on earth! With killer speeds and giant corkscrews, drops and launches, even the bravest will be tested!</p>
	<p><img src="graphics/coaster4.jpg" alt="coaster 4" width="350" height="344" /></p>
	<h1>Prices</h1>
	<table width="359" border="1">
      <tr>
        <td width="108">&nbsp;</td>
        <td width="76">One Day</td>
        <td width="79">Two Days</td>
        <td width="68">Annual</td>
      </tr>
      <tr>
        <td>Adult</td>
        <td>£30</td>
        <td>£43</td>
        <td>£75</td>
      </tr>
      <tr>
        <td>Children</td>
        <td>£25</td>
        <td>£36</td>
        <td>£65</td>
      </tr>
      <tr>
        <td>Senior</td>
        <td>£20</td>
        <td>£22</td>
        <td>£57</td>
      </tr>
      <tr>
        <td>Disabled</td>
        <td>£19.50</td>
        <td>£22</td>
        <td>£51</td>
      </tr>
      <tr>
        <td>Family</td>
        <td>£99</td>
        <td>£120</td>
        <td>£250</td>
      </tr>
      <tr>
        <td>School/coach party</td>
        <td>£500</td>
        <td>£700</td>
        <td>£1100</td>
      </tr>
      <tr>
        <td>Parties</td>
        <td>£200</td>
        <td>£250</td>
        <td>£500</td>
      </tr>
    </table>
	<p>Adult(16-64)<br />
	  Children(3-16)<br />
    SENIOR(65+)</p>
	<p>Family(of 4)<br />
	  School (20 people)<br />
    Parties (10)</p>
	<!-- end #mainContent --></div>
  <div id="footer">    
    <h2>OPENING TIMES    </h2>
    <ul>
      <li>Groups: 7:30 - 11:30 </li>
      <li>Singles 8:00 - 11:30</li>
      <li>Hotel stayers: 6:00 - 11:30</li>
      <li>Shops and food services: shops are open from 8:00am to 10:00pm food services and restaurants are open from 7am - 10:30pm</li>
    </ul>
    <p>Find us on <a href="http://goo.gl/maps/mKEH">Google Maps here</a></p>
    <p>Contact our 24-hour booking line: 01234 567890<br />
      admin@enchantment-nz.co.nz
      <!-- end #footer -->
    </p>
    <p>123 Sumorox Drive<br />
    Auckland<br />
    New Zealand</p>
    </div>
<!-- end #container --></div>

<!-- sparkle code -->
<LAYER NAME="a0" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a1" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a2" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a3" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a4" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a5" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>
<LAYER NAME="a6" LEFT=10 TOP=10 VISIBILITY=SHOW BGCOLOR="#FFFF00" CLIP="0,0,3,3"></LAYER>

<script language="JavaScript">
<!--

if (document.all){
document.write('<div id="starsDiv" style="position:absolute;top:0px;left:0px">')
for (xy=0;xy<7;xy++)
document.write('<div style="position:relative;width:3px;height:3px;background:#FFFF00;font-size:2px;visibility:visible"></div>')
document.write('</div>')
}

if (document.layers)
{window.captureEvents(Event.MOUSEMOVE);}
var yBase = 200;
var xBase = 200;
var yAmpl = 10;
var yMax = 40;
var step = .2;
var ystep = .5;
var currStep = 0;
var tAmpl=1;
var Xbpos = 1;
var Ybpos = 1;
var i = 0;
var j = 0;

if (document.all)
{
  function MoveHandler(){
  Xbpos = document.body.scrollLeft+event.x;
  Ybpos = document.body.scrollTop+event.y;
  }
  document.onmousemove = MoveHandler; 
}

else if (document.layers)
{
  function xMoveHandler(evnt){
  Xbpos = evnt.pageX;
  Ybpos = evnt.pageY;
  }
  window.onMouseMove = xMoveHandler;
}



function animateLogo() {
if (document.all)
{
 yBase = window.document.body.offsetHeight/4;
 xBase = window.document.body.offsetWidth/4;
}
else if (document.layers)
{
 yBase = window.innerHeight/4 ;
 xBase = window.innerWidth/4;
}

if (document.all)
{
var totaldivs=document.all.starsDiv.all.length
 for ( i = 0 ; i < totaldivs ; i++ )
 {
var tempdiv=document.all.starsDiv.all[i].style
  tempdiv.top = Ybpos + Math.cos((20*Math.sin(currStep/20))+i*70)*yBase*(Math.sin(10+currStep/10)+0.2)*Math.cos((currStep + i*25)/10);
  tempdiv.left = Xbpos + Math.sin((20*Math.sin(currStep/20))+i*70)*xBase*(Math.sin(10+currStep/10)+0.2)*Math.cos((currStep + i*25)/10);
 }
}

else if (document.layers)
{
 for ( j = 0 ; j < 7 ; j++ ) 
 {
var templayer="a"+j
  document.layers[templayer].top = Ybpos + Math.cos((20*Math.sin(currStep/20))+j*70)*yBase*(Math.sin(10+currStep/10)+0.2)*Math.cos((currStep + j*25)/10);
  document.layers[templayer].left =Xbpos + Math.sin((20*Math.sin(currStep/20))+j*70)*xBase*(Math.sin(10+currStep/10)+0.2)*Math.cos((currStep + j*25)/10);
 }
}
currStep += step;
setTimeout("animateLogo()", 15);
}
animateLogo();
// -->
</script>
<!-- end sparkle code-->

</body>
</html>

