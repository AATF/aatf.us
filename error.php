<?php
$title = 'Error ' . $_SERVER['REDIRECT_STATUS'];
include_once('header.php');
?>

<div class="container">
<div class="page-header">
<h1><?php print $title ?></h1>
</div>

<p class="lead">Error <?php print $_SERVER['REDIRECT_STATUS']; ?></p>

<?php include_once('footer.php'); ?>
