<?php
include_once('functions.php');
$title = 'Error 403';
include_once('header.php');
?>

<div class="container">
<div class="page-header">
<h1><?php print $title ?></h1>
</div>

<p>You do not have permission to view this page.</p>
<p>You might have come here for a broken link. Please <a href="mailto:webmaster@aatf.us">contact us</a> if you think this is an error.</p>

<?php include_once('footer.php'); ?>
