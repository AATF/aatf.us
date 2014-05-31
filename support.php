<?php
$title = 'Support';
include_once('header.php');
?>

<div class="container">
<div class="page-header">
<h1><?php print $title ?></h1>
</div>

<h2>Donation Forms:</h2>
<p><a href="/donationform.pdf" target="_blank" class="capsule">PDF Document Format</a></p>
<p><a href="/donationform.php" target="_blank" class="capsule">HTML Document Format</a></p>
<p><a href="/donationform.doc" target="_blank" class="capsule">Word Document Format</a></p>

<h2>Online Donations:</h2>
<!--<a class="capsule">Donate Using PayPal:</a>-->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="N8FJ99ZCXLAX4">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<?php include_once('footer.php'); ?>
