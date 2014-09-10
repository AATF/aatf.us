<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>2013 AATF Performances</title>
<?php include("old-header.php");?>
<div id="pageName">
<h2>2013 AATF Performances</h2>
</div>
<div id="pageNav">
<?php include("old-sectionlinks.php");?>
<div id="content">
<?php
if ($galleryhandle) {
  while (($buffer = fgets($galleryhandle)) != false) {
    list($alt, $img) = preg_split('/:/', trim($buffer));
    $filename = "images/Gallery/" . $img;
    // Constraints
    $MAX_DIMENSION = 800;
    $max_width = $MAX_DIMENSION;
    $max_height = $MAX_DIMENSION;
    list($width, $height) = getimagesize($filename);
    $ratiow = $max_width / $width;
    $ratioh = $max_height / $height;
    $ratio = min($ratioh, $ratiow);
    // New dimensions
    $width = intval($ratio * $width);
    $height = intval($ratio * $height); 
    print '<img src="' . $filename . '" width="' . $width . '" height="' . $height . '" alt="' . $alt . '" />';
    print "\n";
    print '<table><tr><td>' . $alt . '</td></tr></table>';
    print "\n";
    print '<br /><br />';
  }
}
?>
</div>
<?php include("old-footer.php");?>
</div>
</body>
</html>
