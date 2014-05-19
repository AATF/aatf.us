<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="og:title" content="Asian Arts Talents Foundation (AATF) Home Page" />
<meta property="og:url" content="http://aatf.us" />
<meta property="og:image" content="http://aatf.us/images/aatflogo.jpg" />
<title>Asian Arts Talents Foundation (AATF) Home Page</title>
<?php include("old-header.php");?>
<!--<img src="images/aatflogo.jpg" width="273" height="105" alt="AATF Logo" />-->
<script type="text/javascript">
<!--
  var filename="music.mp3";
if (navigator.appName == "Microsoft Internet Explorer")
  document.writeln ('<bgsound src="' + filename + '" />');
else if (navigator.appName == "Netscape")
  document.writeln ('<embed src="' + filename + '" autostart="true" width="0" height="0" loop="true" />');
// -->
</script>
<div id="pageName">
<!--<img src="images/aatflogo.jpg" width="307" height="118" align="left" alt="AATF Logo" />-->
<img src="images/aatflogo-bw-transparent.png" width="307" height="118" align="left" alt="AATF Logo" />
<h3>Purpose</h3>
<table><tr><td>
<p>The specific purpose of Asian Arts Talents Foundation is to raise funds to support Asian arts, education, and culture; to sponsor public performances; to offer grants and scholarships for talented, young Asians worldwide; to help and get involved with the community during disasters and catastrophes; and to organize summer activities for younger generations. AATF has been a non-profit organization since 2003.</p>
</td></tr></table>
<!--<h2>AATF Home Page</h2>-->
</div>
<div id="pageNav">
<?php include("old-sectionlinks.php");?>
<div id="content">
<noscript>
This page works best if JavaScript is enabled.
</noscript>
<div class="feature">
<?php
function returnimages($dirname) {
  $pattern = '/(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)/'; // valid image extensions
  $files = Array();
  $curimage = 0;
  if ($handle = opendir($dirname)) {
    while (false !== ($file = readdir($handle))) {
      if (preg_match($pattern, $file)) { // if this file is a valid image
        // Output it as a JavaScript array element
?>
galleryarray[<?php print $curimage ?>]="<?php print $file ?>";
<?php
        $curimage++;
      };
    };
    closedir($handle);
  };
  return $files;
};
?>
<script type="text/javascript">
<!--
  var galleryarray=new Array();
<?php
returnimages('images/Gallery');
?>
var curimg=0
  function rotateimages() {
    var rand=Math.floor(Math.random() * 100)
      document.getElementById("slideshow").setAttribute("src", "/images/Gallery/" + galleryarray[curimg]);
    curimg=(curimg<galleryarray.length-1)? rand : 0
  }
window.onload=function() {
  var rand=Math.floor(Math.random() * 100)
    curimg=(curimg<galleryarray.length-1)? rand : 0
    document.getElementById("slideshow").setAttribute("src", "/images/Gallery/" + galleryarray[curimg]);
  setInterval("rotateimages()", 2000)
}
-->
  </script>
<img id="slideshow" width="700" height="451" src="" alt="Random Photo" />
<h3>Current Month's Activities</h3>
<table>
<tr>
<td>
<?php
$count = 0;
if ($activitieshandle) {
  while (($buffer = fgets($activitieshandle)) != false) {
    list($date, $event) = preg_split('/\s-\s/', trim($buffer));
    list($month) = preg_split('/\s/', $date);
    if ($current_month == $month) {
?>
<p><strong><?php print $date ?></strong></p>
<p><?php print $event ?></p>
<?php
      $count++;
    }
  }
  if ($count == 0) {
?>
<p><strong>No events scheduled for this month</strong></p>
<?php
  }
} else {
?>
<strong>Coming Soon</strong>
<?php
}
?>
</td>
</tr>
</table>
<h3>Upcoming Performance</h3>
<table>
<tr>
<td>
<h2><a href="/PosterPolaroids.jpg">Reminisce the Moment</a></h2>
<a href="/PosterPolaroids.jpg"><img src="PosterPolaroids.jpg" width="350" height="452" alt="Poster" /></a>
<br />
Date: June 14, 2014 (Saturday)
<br />
<br />
Time: 7:00PM
<br />
<br />
Place: San Gabriel High School Auditorium
<br />
801 S. Ramona Street, San Gabriel, CA 91776
<br />
<br />
Contact number: 626-975-3152, 909-275-4088
<br />
<br />
Email Address: info@aatf.us
</td>
</tr>
</table>
</div>
<div class="story">
<!--<h3>Purpose</h3>
<p>The specific purpose of this organization is to raise funds to support Asian arts, education, and culture; to sponsor public performances; to offer grants and scholarships for talented, young Asians worldwide; to help and get involved with the community during disasters and catastrophes; and to organize summer activities for younger generations. AATF has been a non-profit organization since 2003. </p>-->
</div>
<!--<div class="story">
<table width="100%" cellpadding="0" cellspacing="0" summary="">
<tr valign="top">
<td class="storyLeft">
<p> <a href="" class="capsule">Coming Soon</a>Coming Soon </p>          </td>
<td>
<p> <a href="" class="capsule">Coming Soon</a>Coming Soon </p>          </td>
</tr>
<tr valign="top">
<td class="storyLeft">
<p> <a href="" class="capsule">Coming Soon</a>Coming Soon </p>          </td>
<td>
<p> <a href="" class="capsule">Coming Soon</a>Coming Soon </p>          </td>
</tr>
</table>
</div>-->
</div>
<?php include("old-footer.php");?>
